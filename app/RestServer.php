<?php
/**
 * Created by PhpStorm.
 * User: Stratege Takam
 * Date: 02/08/2018
 * Time: 22:45
 */

namespace App;


class RestServer
{
    public $baseUrl = "";
    public $baseHost = "";


    public function __construct($api, $path)
    {
        $this->baseUrl = $api; // chemin vers l'api exemple (http://api.supfile.supinfo.com/v1/)
        $this->baseHost = $path; // chemin  vers la racine de l'api exemple (http://api.supfile.supinfo.com/)
        //dump($baseUrl, $baseHost);
    }


    public function get($url){
        $url = $this->baseUrl . $url;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        return $result;
    }

    public function post($url, $params){

        $url = $this->baseUrl . $url;
        $post_data = '';

        foreach($params as $k => $v){
            $post_data .= $k . '='.$v.'&';
        }

        rtrim($post_data, '&');

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, count($post_data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

        $output = curl_exec($ch);

        curl_close($ch);
        return $output;

    }

    public function put($url, $params){

        $url = $this->baseUrl . $url;
        $post_data = '';

        foreach($params as $k => $v){
            $post_data .= $k . '='.$v.'&';
        }

        rtrim($post_data, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, count($post_data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

        $output = curl_exec($ch);

        curl_close($ch);
        return $output;

    }


    public function delete($url, $params){

        $url = $this->baseUrl . $url;

        $post_data = '';

        foreach($params as $k => $v){
            $post_data .= $k . '='.$v.'&';
        }

        rtrim($post_data, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, count($post_data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

        $output = curl_exec($ch);

        curl_close($ch);
        return $output;

    }


    // exemple d'utilisation
    //instancier le rest en passant les paramètres
    //$restServer  = new RestServer($this->getParameter("api"),$this->getParameter("path"));

    //creer un objet
    //$directory["name"] = $request->request->get("newFolderName");
    //utiliser le verbe post en passant l'objet en paramètre
    //$result = $restServer->post("directory",$directory);
    //une url exemple
    //$path = "directory/".$directoryId."/".$userId."?search=".$search;
    // utiliser le verbe get en passant l'utl en paramètre
    //$directories =  $restServer->get($path);
    //recuperer un id
    //$directoryId = $val->get("directoryId");
    //utiliser le verbe delete
    //$result  = $restServer->delete("directory/delete/many", ["data"=>$data]);



}