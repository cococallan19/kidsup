<?php

namespace App\Http\Controllers;
use App\Entry;
use Illuminate\Http\Request;
use App\Http\Requests\ModelRequest;
use App\Http\Requests;
use Mail;

class ModelController extends Controller
{



  public function index()
  {
    return view('model.index');
  }
  public function store(ModelRequest $request)
  {
    $inputs = \Request::all();

    switch ($inputs['action']) {
      case 'conf':
        $photo = '';
        \Session::push('model-enrty', TRUE);
        if (isset($inputs['image'])) {
          $photo = $this->moveImages($inputs['image']);
        }
        return view('model.confirm')->with(compact('inputs'))->with(compact('photo'));
        break;
      case 'back':
        \Session::push('model-enrty', FALSE);
        return redirect('/model#entry-form')->withInput($inputs);
        break;
      case 'entry':
        $this->saveEntry($inputs);
        $this->sendEntryMail($inputs);
        return redirect('/model/complete');
        break;
      default:
        # code...
        break;
    }


  }
  public function show()
  {
    if (\Session::get('model-enrty') == TRUE){
      \Session::forget('model-enrty');
      return view('model.complete');
    } else {
      return redirect('/model');
    }

  }

  private function moveImages($image)
  {
    $name = md5(sha1(uniqid(mt_rand(), true))).'.'.$image->getClientOriginalExtension();

    $path = public_path() . '/media/';

    if (!\File::isDirectory($path)) {
      \File::makeDirectory($path);
      \File::makeDirectory($path . 'thumbnail/');
    }

    $image = \Image::make($image->getRealPath());

    $image->save($path . $name)->resize(null, 200, function ($constraint) {
        $constraint->aspectRatio();
    });
    $image->save($path . 'thumbnail/' . $name);


    $data = array(
    'success' => TRUE,
    'filename' => $name,
    );

    return $data;
  }

  private function saveEntry($inputs)
  {
    $inputs['sns'] = serialize($inputs['sns']);
    Entry::create($inputs);
  }

  private function sendEntryMail($data)
    {

         Mail::send(array('text' => 'emails.model'), ['data' => $data], function ($m) use ($data) {
            $m->from('hq@kids-up.jp', 'KidsUPモデル選考委員会');

            $m->to($data['email'], $data['parent']);
            $m->bcc('r-hayashi@p-up.jp' , '林');
            $m->subject('【KidsUPモデル】エントリーありがとうございます');
        });


    }


}
