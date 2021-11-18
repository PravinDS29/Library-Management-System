<?php
  
namespace App\Imports;
  
use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
  
class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'id'     => $row['id'],
            'title'     => $row['title'],
            'description'    => $row['description'], 
            'image'    => $row['image'], 
            'file'    => $row['file'], 
           
        ]);
    }
}