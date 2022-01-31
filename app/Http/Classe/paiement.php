<?php
namespace App\Http\Classe;

use Exception;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;

class paiement
{
    private $public_key; //obtenu à l'enregistrement du site dans https://pro.ariarynet.com
    private $private_key; //obtenu à l'enregistrement du site dans https://pro.ariarynet.com
    private $client_id; //générer après l'inscription dans https://pro.ariarynet.com
    private $client_secret; //générer après l'inscription dans https://pro.ariarynet.com
    private $util;
    private $site_url; //url du site enregistré dans https://pro.ariarynet.com
    private $token=null;
    const URL_AUTH = "https://pro.ariarynet.com/oauth/v2/token";
    const URL_PAIEMENT = "https://pro.ariarynet.com/api/paiements";
    const URL_PAIE =  "https://moncompte.ariarynet.com/payer/";

    /**
     * Paiement constructor.
     * @param $public_key
     * @param $private_key
     * @param $client_id
     * @param $client_secret
     * @param $site_url
     * @param Util $util
     */
    public function __construct(util $util)
    {
        $this->public_key = 'bf52bc79467d17d586553197e8de462a9b4c4b6900b3ee3b11';
        $this->private_key = 'c5d99f0ea9777f7d820f433adeedfc86917e9f9214fa88523c';
        $this->client_id = '201_5vp68gceriosc044koo88gc08w8c4os88kgo4cw884c80s80so';
        $this->client_secret = '3g6bd9mmb3wgsooosgwc4sok4oc08gksw8kss8sk0s8o8s04k8';
        $this->util=$util;
        $this->site_url="https://gasytombola.tolotrasa.com"; //url du site inscrit dans https://pro.ariarynet.com
    }

    /**
     * @return mixed
     */
    private function getAccess(){
        if($this->token!=null)return $this->token;
        $param=array(
            'client_id'=>$this->client_id,
            'client_secret'=>$this->client_secret,
            'grant_type'=>'client_credentials'
        );
        $json= json_decode($this->util->sendCurl(self::URL_AUTH,"POST",array(),$param));
        if(isset($json->error)){
            throw new Exception($json->error.": ".$json->error_description);
        }
        $this->token=$json->access_token;
        return $json->access_token;
    }

    /**
     * @param $url
     * @param array $params_to_send
     * @return bool|int|string
     */
    private function send($url,array $params_to_send){
        $params_crypt=$this->util->crypter($this->public_key,json_encode($params_to_send));
        $params=array(
            "site_url"=>$this->site_url,
            "params"=>$params_crypt
        );
        $headers=array("Authorization:Bearer ".$this->getAccess());
        $json=$this->util->sendCurl($url,"POST",$headers,$params);
        $error=json_decode($json);
        if(isset($error->error)){
            throw new Exception($error->error.": ".$error->error_description);
        }
        return $this->util->decrypter($this->private_key,$json);
    }

    /**
     * @param $idpanier
     * @param $montant
     * @param $nom
     * @param $reference
     * @param $adresseip
     * @return bool|int|string
     */
    public function payer($idpanier,$montant,$nom,$reference,$adresseip){
        $now=new \DateTime();
        $params=array(
            "unitemonetaire"=>"Ar",
            "adresseip"=>$adresseip,
            "date"=>$now->format('Y-m-d H:i:s'),
            "idpanier"=>$idpanier,
            "montant"=>$montant,
            "nom"=>$nom,
            "reference"=>$reference
        );
        $id=$this->send(self::URL_PAIEMENT,$params);
        return new RedirectResponse(self::URL_PAIE.$id);
    }
}
