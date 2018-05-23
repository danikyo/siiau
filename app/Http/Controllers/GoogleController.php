<?php

namespace App\Http\Controllers;

#use Illuminate\Http\Request;
use App\googleUser;
use App\User;
use Auth;
use Request;


class GoogleController extends Controller
{
  protected $modulo = "usuarios";

    public function creationURL()
    {
      $id = Auth::id();
      $idgoogle = googleUser::where('user_id', $id)->get();
      $clienteid = '814254305351-r69tpf3lt8ku30g1e3nj8vi7gqvrapb4.apps.googleusercontent.com';
      $response_type = 'code';
      $scope = 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/drive.appfolder https://www.googleapis.com/auth/drive.apps.readonly';
      $redirect = 'http://localhost:8080/googledrive';
      $access_type = 'offline';
      return view('googleDrive', compact('clienteid','response_type','scope','redirect','access_type','idgoogle'));
    }

    public  function accessTokenCreation(){

      $code = Request::input('code');
      $userId = Request::input('userid');
      $idgoogle = googleUser::where('user_id', $userId)->get();
      $data = array(
                'code'=> $code,
                'client_id'=>'814254305351-r69tpf3lt8ku30g1e3nj8vi7gqvrapb4.apps.googleusercontent.com',
                'client_secret'=>'L-sQJWCusIBGSKWsSumx-jDk',
                'redirect_uri'=>'http://localhost:8080/googledrive',
                'grant_type' => 'authorization_code'
              );
      $urlPost = http_build_query($data);
      $curl = curl_init();
      curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.googleapis.com/oauth2/v4/token",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $urlPost,
            CURLOPT_HTTPHEADER => array(
                "Content-type: application/x-www-form-urlencoded"
            ),
        ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      $userResponse = json_decode($response, true);
      $newGoogleUser = new googleUser;
      $newGoogleUser->createUserGoogle($code,$userResponse['access_token'],$userResponse['refresh_token'],
      $userResponse['token_type'],$userId);

        return view('home');


  }

  public  function refreshToken(){

    $dataRefresh = array(
              'client_id'=>'814254305351-r69tpf3lt8ku30g1e3nj8vi7gqvrapb4.apps.googleusercontent.com',
              'client_secret'=>'L-sQJWCusIBGSKWsSumx-jDk',
              'refresh_token'=>'1/QTTDPZD78rKP53FjksVBMPLosSs-rKqr39wmOW8CKac',
              'grant_type'=>'refresh_token');

    $urlRefresh =  http_build_query($dataRefresh);

    $curl = curl_init();
    curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.googleapis.com/oauth2/v4/token",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $urlRefresh,
          CURLOPT_HTTPHEADER => array(
              "Content-type: application/x-www-form-urlencoded"
          ),
      ));
  $response = curl_exec($curl);
  $err = curl_error($curl);

   curl_close($curl);


  var_dump($response);


    }

    public  function createFolders(){

      $strUrl = 'https://www.googleapis.com/drive/v2/files';

      $arrPostData = array();
      $arrPostData ['mimeType'] = "application/vnd.google-apps.folder";
      $arrPostData ['title'] = "PRUEBASIIAU";
      $arrPostData ['parents'] = "root";
      #var_dump($arrPostData);
      #  echo json_encode($arrPostData);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Authorization: Bearer ya29.GlykBddGmOXbGqAKb-NKz6JThHwwRG9n9dOHuqhFx0LeaQWgx_v40NG47QkPrk13xgkpoJImdbaYRdFMM3nphdeCKsDYf9m6bHbMeduhYL_UFvAf2nO4jVzVlI6xDQ",
          "Content-type: application/json"
        ));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $result=curl_exec($ch);
        curl_close ($ch);
        $jsonData = json_decode($result,true);
        #return $jsonData['id'];

        var_dump($jsonData);
      }


        public  function uploadFile(){

          $inputarray = '';
          $inputarray .= "--foo_bar_baz\r\n";
          $inputarray .= "Content-Type: application/json; charset=UTF-8\r\n\r\n";
          $inputarray .= "{\r\n";
          $inputarray .= "\"name\": \"Narda.txt\"\r\n";
          $inputarray .= "}\r\n\r\n";
          $inputarray .= "--foo_bar_baz\r\n";
          $inputarray .= "Content-Type:text/plain\r\n\r\n";
          $inputarray .= "Hola soy Narda" . "\r\n";
          $inputarray .= "--foo_bar_baz--\r\n";

          #var_dump ($inputarray);
          echo (strlen($inputarray));

          $url = 'https://www.googleapis.com/upload/drive/v3/files?uploadType=multipart';

          $token = 'ya29.GlykBddGmOXbGqAKb-NKz6JThHwwRG9n9dOHuqhFx0LeaQWgx_v40NG47QkPrk13xgkpoJImdbaYRdFMM3nphdeCKsDYf9m6bHbMeduhYL_UFvAf2nO4jVzVlI6xDQ';
          $headers = array(
            'Content-Type: multipart/related; boundary=foo_bar_baz',
            'Authorization: Bearer ' . $token,
            'Content-Length: ' . strlen($inputarray)
          );

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $inputarray);

          $output = curl_exec($ch);
          curl_close($ch);

          echo $output;

        }



        #public  function createUserGoogle($code,$token,$refreshTok,$type){

        #  $flight = new googleUser;

        #  $flight->code = 'ESTAESOTRAPRUEBA';
        #  $flight->token ='31asfasdf';
        #  $flight->refreshToken ='31asfasdf';
        #  $flight->type ='31asfasdf';
        #  $flight->user_id =1;
        #  $flight->save();
        #  }
          function postMetod()
       {
             $idgoogle = googleUser::where('user_id', 4)->get();
             if($idgoogle != NULL){
               echo("hola");
             }
            if( count($idgoogle)>=1){
              echo("HOLA 2");
            }

       }





  }
