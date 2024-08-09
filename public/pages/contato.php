<h2>Pagina Contato</h2>

<?= get("message") ?>

<form action="/pages/forms/contato.php" method="POST" role="for">

    <legend>Contato</legend>

    <div class="form_group">

        <label for="">Nome</label>

        <input type="text" class="form-control" name="name" placeholder="Nome">

    </div>

    <div class="form_group">

        <label for="">Email</label>

        <input type="text" class="form-control" name="email" placeholder="email">

    </div>

    <div class="form_group">

        <label for="">Assunto</label>

        <input type="text" class="form-control" name="subject" placeholder="Assunto">

    </div>

    <div class="form_group">

        <label for="">Mensagem</label>

        <textarea name="message" id="" cols="30" rows="10" placeholder="Mensagem" class="form-control"></textarea>

    </div>
    </br>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>