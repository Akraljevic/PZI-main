<!DOCTYPE html>
<html>
    <head>
        <title>
            Kontakt Forma
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Kontakt Forma</h1>

            <form class="row g-3">
                <div class="col-md-6">
                    <label for="ime" class="form-label">Ime</label>
                    <input type="text" class="form-control" id="ime" required>
                </div>
                <div class="col-sm-6">
                    <label for="prezime" class="form-label">Prezime</label>
                    <input type="text" class="form-control" id="prezime" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" class="form-control" id="email" required placeholder="netko@mail.com">
                </div>
                <div class="col-md-6">
                    <label for="mob" class="form-label">Mobitel</label>
                    <input type="text" class="form-control" id="mob" placeholder="063 333 555">
                </div>
                <div class="col-md-12">
                    <label for="tekst" class="form-label">Komentar</label>
                    <textarea class="form-control" id="tekst" rows="3" placeholder="Unesite komentar"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" >Posalji</button>

            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>