<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    protected $user;
    protected $request;

    public function __construct(User $user, Request $request)
    {
        $this->user    = $user;
        $this->request = $request;
    }

    public function index()
    {
        $users = $this->user->all();
        
        return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store()
    {
        $data = $this->request->all();
        
        if ($this->request->hasFile('foto')) {
            
            $imagem = $data['foto'];
            $nameImage = uniqid(date('HisYmd'));
            
            $extencao = $this->request->foto->extension($imagem);
            $namefoto = "{$nameImage}.{$extencao}";
            
            $data['foto'] = $namefoto;
            $teste = $this->request->foto->storeAs('users', $namefoto);
            
        }elseif($this->request->foto == NULL){
            unset($data['foto']);
        }else{
            return redirect()->route('users.create')->with('info', 'Aconteceu um erro! Houve algum problema com sua imagem.');
        }

        $inserir = User::create($data);
        if($inserir){
            return redirect()->route('users.create')->with('success', 'Salvo com sucesso! Mais um colaborador cadastrado!');
        }else{
            return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
        }
    }

    public function show($id)
    {
        $user = $this->user->find($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $users = $this->user->find($id);
        
        return view('users.edit', compact('users'));
        
    }
    
    public function perfil($id)
    {
        $users = $this->user->where('id','=', $id)->get();
        
        return view('users.perfil', compact('users'));
        
    }

    public function update($id)
    {
        $data = $this->request->except('_token');
        
        if($data['password'] != NULL){
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
        
        if ($this->request->hasFile('foto')) {
            
            $imagem = $data['foto'];
            $nameImage = uniqid(date('HisYmd'));
            
            $extencao = $this->request->foto->extension($imagem);
            $namefoto = "{$nameImage}.{$extencao}";
            
            $data['foto'] = $namefoto;
            $teste = $this->request->foto->storeAs('users', $namefoto);
            
        }elseif($this->request->foto == NULL){
            unset($data['foto']);
        }else{
            return redirect()->route('users.edit')->with('info', 'Aconteceu um erro! Houve algum problema com sua imagem.');
        }

        $update = User::where('id', $id)->update($data);
        if($update){
            return redirect()->route('users.edit', $id)->with('success', 'Alterado com sucesso!');
        }else{
            return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
        }
        
    }
        public function updatePerfil($id)
    {
        if($id == Auth::user()->id){
            $data = $this->request->except('_token');
            
            if($data['password'] != NULL){
                $data['password'] = bcrypt($data['password']);
            }else{
                unset($data['password']);
            }
            
            $update = User::where('id', $id)->update($data);
            if($update){
                return redirect()->route('users.edit', $id)->with('success', 'Alterado com sucesso!');
            }else{
                return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
            }
        
        }else{
            return redirect()->back()->with('error', 'Não é permitido fazer isso, não tente novamente');
        }
        
        
    }

    public function destroy($id)
    {
        if($id == '1'){
            return redirect()->back()->with('error', 'Este usuário não pode ser deletado. Por favor não insiste.');
        }else{
            // Recupera o usuário pelo seu id
            if ( !$user = User::find($id) )
            return redirect()->back();
            $data = $this->request->only('fl_ativo');
            $data['fl_ativo'] = 0;
            $delete = $this->user->where('id', $id)->update($data);

            if($delete){
                return redirect()->route('users.index')->with('success', 'Pedido deletado com sucesso!');
                // Storage::delete("users/{$user->foto}");
            }else{
                return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
            }
        }
    }

}
