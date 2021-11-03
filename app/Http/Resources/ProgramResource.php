<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
class ProgramResource extends JsonResource
{
/**
* Transform the resource into an array.
*
* @param \Illuminate\Http\Request $request
* @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
*/
public function toArray($request)
{
    return [
    'id' => $this->id,
    'nama_obat' => $this->nama_obat,
    'harga' => $this->harga,
    'created_at' => $this->created_at,
    'updated_at' => $this->updated_at,
    ];
    }
    }