<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap demo</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link href="css/style.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-2">
            <div class="container">
                <div class="row" justify-content-center>
                    <div class="col-10">
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link ps-5" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">TODO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-5 offset-1 my-auto">
                        <h2>Hi !</h2>
                        <h1 class="fw-bold">I am Andhika Ferdiansyah</h1>
                        <p>
                            Undergraduate student from Bina Nusantara
                            University, i take computer science degree and i
                            love machine learning and autonomous vehicle stuff.
                        </p>
                        <button class="btn btn-custom1 my-1">Let's talk</button>
                    </div>
                    <div class="col-5">
                        <img
                            src="images/profile.png"
                            width="80%"
                            class="float-end"
                            alt=""
                        />
                    </div>
                    <div class="col-2 offset-1">
                        <br /><br /><br /><br /><br /><br />
                        <div class="to-do-word text-center fs-1 mt-6 my-5">
                            <p>TO</p>
                            <p>DO</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Front End Develop</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Bagian HTML CSS
                            </h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Magnam ab laudantium sapiente
                                at iusto velit incidunt. Ducimus sapiente
                                repellat expedita maiores et modi tenetur
                                doloribus eum dignissimos, sunt eveniet. Alias.
                            </p>
                            <a href="#" class="card-link">Link Github</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
