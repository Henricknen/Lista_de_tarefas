<h1>Lista de Tarefas</h1>

@if(count($lista) > 0)
    <ul>
        @foreach($lista as $item)     <!-- ultillizando 'foreach' para 'mostrar' e 'deletar' os registros do banco de dados na tela -->
            <li>{{ $item-> item }} - <a href = "delete/{{ $item-> id }}">[x]</a></li>
        @endforeach
    </ul>
@else
    <h4>Não há itens</h4>
@endif

<hr/>

<form method = "POST">      <!-- formúlario para 'adiçionar' itens na lista -->
    {{ csrf_field() }}<!-- é um sistema de proteção contra ataques de 'falsificação de soliçitações' -->
    <input type = "text" name = "item" />
    <input type = "submit" value = "+" />
</form>

<hr>

<footer>
    <p>Copyright 2024 - by LUIS HENRIQUE S.F. <br/> 
   </footer>