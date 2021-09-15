<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Pages;
use App\Models\CSVModel;



class UrlConverter extends BaseController
{
    public function index()
    {
        $data['covertType'] = "";
        $data['inputURL'] = "";
        $data['convertURL'] = "";
        $data['error_message'] = "";
        $pages = new Pages();
        return $pages->view("urlconverter", $data);
    }

    public function converter()
    {
      $data['convertType'] = "";
      $data['inputURL'] = "";
      $data['convertURL'] = "";
      $data['error_message'] = "";
      $pages = new Pages();

      if ($this->request->getMethod() == 'post') {
          $data['convertType'] = $this->request->getVar('convertType');
          $data['inputURL']   = ($this->request->getVar('inputURL') !== false && $this->request->getVar('inputURL') !="") ? trim($this->request->getVar('inputURL')) : false;
          $data['convertURL']   = ($this->request->getVar('convertURL') !== false && $this->request->getVar('convertURL') !="") ? trim($this->request->getVar('convertURL')) : false;

          if(($data['inputURL'] === false && $data['convertType'] == 1) ||
             ($data['convertURL'] === false && $data['convertType'] == 2))
          {
            $data['error_message'] = "Please Enter Text or Punycode";
            return $pages->view("urlconverter", $data);
          } else {
            if($data['convertType'] == 1){
              $data['convertURL'] = idn_to_ascii($data['inputURL']);
            } elseif ($data['convertType'] == 2) {
              $data['inputURL'] = htmlentities(idn_to_utf8($data['convertURL']), ENT_COMPAT, 'UTF-8');
            }
            return $pages->view("urlconverter", $data);
          }
      } else {
        return $pages->view("urlconverter", $data);
      }
    }

}
