<?php
namespace App\Http\Classe;


use DateTime;

include(app_path().'/Http/Classe/vendor/autoload.php');


class vanillapay
{
    public function __construct(){

    }
    public function payer($nom,$montant,$reference,$id_panier){
        $des = new \phpseclib\Crypt\TripleDES();

        $site_url = 'https://tolotrasa.com';//string // url du site e-commerce
        $ip= '195.110.34.66';// adresse ip du site e-commerce
        $now = new DateTime();//DateTime // Date du paiement  (now)
        $daty = $now->format('Y-m-d');//formattage de date

//clés de sécurité
        $public_key = '7a294c58de2ee314eb6654563794febafd62857c3330efdaed'; //obtenu sur la plateforme pro.ariarynet.com
        $private_key = '96597050a6664686b58f12d07958277e52506275ab5a26a00b'; //obtenu sur la plateforme pro.ariarynet.com

//authentification
        $param = array(
            'client_id' => '204_1k25kgcqi6dc48csg84soow0wck8048goosk0ggww880k0cw8g',
            'client_secret' => '3yldu9xvsc8w00ks8w8gcgk0o4s88sgwggcgg48kwgscww8sws',
            'grant_type' => 'client_credentials'
        );
        /*
            client_secret et client_id obtenu sur la plateforme pro.ariarynet.com;
            NE PAS TOUCHER: grant_type
        */


        $curl = curl_init();
        $url = 'https://pro.ariarynet.com/oauth/v2/token';//NE PAS CHANGER

        curl_setopt($curl, CURLOPT_HTTPHEADER, array());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);


        curl_setopt($curl, CURLOPT_POSTFIELDS, $param);
        curl_setopt($curl, CURLOPT_URL, $url);

        $result = curl_exec($curl);


        curl_close($curl);



//on obtient le token à utiliser pour les transactions
        $json = json_decode($result);
        $token = $json->access_token;

        $headers = array("Authorization:Bearer " . $token);

//cryptage des données
        $des = new \phpseclib\Crypt\TripleDES();

        $des->setKey($public_key);

        $params_to_send = array(
            "unitemonetaire" => "Ar",
            "adresseip"      => $ip,
            "date"           => $daty,
            "idpanier"       => $id_panier,
            "montant"        => $montant,
            "nom"            => $nom,
            "reference"      => $reference
        );
        /*
            reference: Type String: vous pouvez avoir une reference interne pour votre panier
        */

//crypter les paramètres à envoyer à notre serveur
        $params_crypt = $des->encrypt(json_encode($params_to_send));

//initialisation paiement
        $params = array(
            "site_url" => $site_url,
            "params"   => $params_crypt
        );
//executer un curl pour obtenir un id_paiementqu'on utilisera plus tard
        $curl = curl_init();
        $url = 'https://pro.ariarynet.com/api/paiements';//NE PAS CHANGER

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        curl_setopt($curl, CURLOPT_URL, $url);
        $result = curl_exec($curl);
        curl_close($curl);

//on obtient un id qu'il faut decrypter
        $des->setKey($private_key);
        $id_vanilapay = $des->decrypt($result);

        return $id_vanilapay;
    }
    /**
     * Created by PhpStorm.
     * User: ariary
     * Date: 10-12-18
     * Time: 15:42
     */


//utiliser l'id ainsi obtenu pour la redirection vers https://moncompte.ariarynet.com/payer/{_id]
}
