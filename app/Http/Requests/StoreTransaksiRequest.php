<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransaksiRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'kode_masuk' => 'required',
            'tanggal_masuk' => 'required',
            'totalHarga' => 'required',
            'pemasok_id' => 'required',
            'barang_id' => 'required',
            'harga_beli' => 'required',
            'jumlah' => 'required',
            'sub_total' => 'required',
        ];
    }
}
