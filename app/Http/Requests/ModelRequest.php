<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ModelRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function authorize()
     {
         return true;
     }

     /**
      * Get the validation rules that apply to the request.
      *
      * @return array
      */
     public function rules()
     {
       return [
           'name'    => 'required',
           'parent'    => 'required',
           'age'    => 'required',
           'height'    => 'required',
           'tel'    => 'required',
           'image'  => 'max:10000|image',
           'email'   => 'required|email',
       ];
     }

     public function messages()
      {
          return [
              'required' => ':attribute は必須です',

          ];
      }

    public function attributes()
     {
         return [
             'name'      => 'お名前',
             'parent'      => '保護者お名前',
             'age'       => '年齢',
             'height'    => '身長',
             'email'     => 'メールアドレス',
             'image'     => '応募写真',
             'tel'   => 'お電話番号',
         ];
     }
}
