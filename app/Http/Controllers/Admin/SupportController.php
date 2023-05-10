<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function index(Support $support) //? ENVIA PRA O INDEX
    {

        $supports = $support->all(); 

        return view('admin\supports\index', compact('supports'));
    }

    public function create() //? CRIA NOVA DUVIDA
    {
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request, Support $support) //? SALVA DUVIDA NO DB
    {

        $data = $request->validated();
        $data['status'] = 'a';
        $support = $support->create($data);

        return redirect()->route('supports.index');
    }

    public function show(string|int $id, Support $support) //? MOSTRA DUVIDA
    {
        // find($var) = Procura variavel
        // where('id', $var)->first() = Retorna primeiro valor
        //  where('id', '!=', $var)->first() = Retorna primeiro valor

        if (!$support = $support->find($id)) {
            return redirect()->back();
        }

        return view('admin/supports/show', compact('support'));

    }

    public function edit(Support $support, string|int $id) //? EDITA DUVIDA
    {
        $support = $support->where('id', $id)->first();

        if (!$support) {
            return redirect()->back();
        }

        return view('admin/supports/edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request, string $id, Support $support) //? SALVA DUVIDA
    {
        if (!$support = $support->find($id)) {
            return redirect()->back();
        }

        /*

        - OUTRO MÉTODO DE SALVAR -
        
        $support->subject = $request->subject;
        $support->body = $request->body;
        $support->save();

        */

        $support->update($request->validated());

        return redirect()->route('supports.index');
    }

    public function destroy(string|int $id, Support $support)
    {
        if (!$support = $support->find($id)) {
            return redirect()->back();
        }

        $support->delete();
        
        return redirect()->route('supports.index');
    }
 
}