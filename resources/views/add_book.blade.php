<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Biblioteca - Novo Livro</title>
</head>

<body>
    <div class="container-flex">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <span class="fs-4" style="margin-right: 100px;">Bíblioteca</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="/books/new" class="nav-link active" aria-current="page">novo livro</a></li>
                    <li class="nav-item"><a href="/books" class="nav-link">lista de livros</a></li>
                </ul>
            </header>
        </div>
        @if (session()->get('status') == 'sucess')
            <div class="alert alert-success" role="alert">
                Livro cadastrado com sucesso!
            </div>
        @endif
        @if (session()->get('status') == 'fail')
            <div class="alert alert-danger" role="alert">
                Opa! Algo deu errado :( - Volte mais tarde
            </div>
        @endif
        <main class="container" style="margin: 5vh auto;">
            <form action="/library/new-book" method="post">
                @csrf
                <fieldset>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">nome<sup>*</sup></label>
                        <input autocapitalize="words" type="text" class="form-control" id="nameInput"
                            placeholder="Nome do livro" required style="text-transform: capitalize;" name="name">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">Autor<sup>*</sup></label>
                        <input type="tel" class="form-control" id="phoneInput" placeholder="nome do autor"
                            required name="author">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">Editora<sup>*</sup></label>
                        <input type="text" class="form-control" id="phoneInput" placeholder="editora"
                            required name="publishing_house">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Ano de lançamento</label>
                        <input type="month" class="form-control" id="dateInput" name="release_year">
                    </div>
                </fieldset>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" id="submit">cadastrar</button>
                </div>
            </form>
        </main>
    </div>
    <script src="index.js"></script>
</body>
</html>