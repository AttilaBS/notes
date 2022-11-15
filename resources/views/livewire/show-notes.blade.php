<div>
    <div class="row mb-4">
        <div class="col-md-12">
          <div class="float-right mt-5">
              <input wire:model="search" class="form-control" type="text" placeholder="Procurar Nota...">
          </div>
        </div>
    </div>
    <div class="row">
       <table class="table">
           <thead>
               <tr>
                  <th>Id</th>
                  <th>Usuário Id</th>
                  <th>Título</th>
                  <th>Nota</th>
                  <th>Criada em</th>
                  <th>Atualizada em</th>
                  <th>Editar</th>
                  <th>Remover</th>
               </tr>
           </thead>
           <tbody>
               @foreach($notes as $note)
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->user_id }}</td>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->content }}</td>
                    <td>{{ $note->created_at }}</td>
                    <td>{{ $note->updated_at }}</td>
                    <td>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Editar
                        </button>
                    </td>
                    <td>
                        <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Remover
                        </button>
                    </td>
                @endforeach
           </tbody>
       </table>
   </div>



</div>
