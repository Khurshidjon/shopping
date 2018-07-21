<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            'uploadFile' => 'image | mimes:jpg, bmp, png | max:8096'
        ];

        /*$photos = count($this->input('photos'));
        foreach (range(0, $photos) as $e){
            $rule['photos. ' . $e] = 'image | mimes:jpg, bmp, png | max:8096';
        }
        return $rule;*/

    }
}
