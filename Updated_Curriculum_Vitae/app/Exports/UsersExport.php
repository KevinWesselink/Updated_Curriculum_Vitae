<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all([
            'id', 
            'userName', 
            'firstName', 
            'lastName', 
            'sex', 
            'telephoneNumber', 
            'address', 
            'postalCode', 
            'city', 
            'country', 
            'dateOfBirth', 
            'currentProfession', 
            'email', 
            'created_at'
        ]);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID', 
            'Username', 
            'Firstname', 
            'Lastname', 
            'Sex', 
            'TelephoneNumber', 
            'Address', 
            'Postalcode', 
            'City', 
            'Country', 
            'Date of birth', 
            'Current profession', 
            'Email', 
            'Created at'
        ];
    }
}
