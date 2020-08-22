<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactRepository extends ResourceRepository
{

    public function __construct(Contact $category)
    {
        $this->model = $category;
    }

    
}