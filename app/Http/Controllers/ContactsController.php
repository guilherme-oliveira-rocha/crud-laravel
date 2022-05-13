<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Resources\ContactResource;

class ContactsController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(ContactRequest $request){
        Contact::create([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'cpf'=> $request->cpf,
            'email'=> $request->email,
            'phone'=> $request->phone,
        ]);
        return redirect()->route('show_contact');
    }

    public function show(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            $data = ContactResource::collection(Contact::where('firstname', $search)->orWhere('cpf', $search)->get());
        }else{
            $data = ContactResource::collection(Contact::all())->resolve();
        }
        $customers = compact('data', 'search');
        return view('read', ['contacts' => $data])->with($customers);
    }

    public function edit($id){
        $contact = (new ContactResource(Contact::findOrFail($id)))->resolve();
        return view('edit', ['contact' => $contact]);
    }

    public function update(ContactRequest $request, $id){
            $contact = Contact::findOrFail($id);
            $contact->update([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'cpf'=> $request->cpf,
            'email'=> $request->email,
            'phone'=> $request->phone,
        ]);
        return redirect()->route('show_contact');
    }



    public function delete($id){
        $contact = (new ContactResource(Contact::findOrFail($id)))->resolve();
        return view('delete', ['contact' => $contact]);
    }

    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('show_contact');
    }
}
