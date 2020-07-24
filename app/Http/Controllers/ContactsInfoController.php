<?php

namespace App\Http\Controllers;

use App\Models\ContactsInfo;
use Illuminate\Http\Request;

class ContactsInfoController extends Controller
{
    public function saveContact(Request $request)
    {
        $validated = $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email:rfc',
            'phone' => 'required',
        ]);

        if ($validated === false) return;

        return ContactsInfo::create($request->all());
    }
}
