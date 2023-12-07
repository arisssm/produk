<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|min:5|max:20',
            'supplier_id' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'total_stok' => 'required|numeric',  
        ];
    }
    public function messages(): array
    {
        return [
            'nama.required' => 'Nama produk harus di isi.',
            'nama.min' => 'Nama produk minimal 5 huruf.',
            'nama.max' => 'Nama produk maximal 20 huruf.',
            'supplier_id.required' => 'Supplier harus di isi',
            'deskripsi.required' => 'Deskripsi produk harus diisi.',
            'harga.required' => 'Harga produk harus diisi.',
            'harga.numeric' => 'Harga produk berisi angka.',
            'total_stok.required' => 'Total stok produk harus diisi.',
            'total_stok.numeric' => 'Total produk berisi angka.',
        ];
    }
}
