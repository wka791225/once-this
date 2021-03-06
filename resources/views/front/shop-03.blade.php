2<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/shop.css">
    <title>Document</title>
</head>

<body>

    <!-- bar -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand " href="#"><img class="logo" src="./img/logo.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-3 ">
                            <a class="nav-link text-dark" href="#">Blog <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link text-dark " href="#">Portfolio</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link  text-dark" href="#">About</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link text-dark" href="#">Contart</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-dark" href="#"><i class="bi bi-cart-fill"></i></a>
                        </li>

                        <li class="nav-item ">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person-circle"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Login</a>

                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>

                </div>
            </div>

        </nav>
    </header>
    <main>
        <!-- <meter min="0" max="100" value="20"></meter>
 <progress max="100" value="70"></progress> -->

        <div class="container">
            <div class="row">
                <div class="list col-9 mx-auto h-100 ">
                     <!-- ????????? -->
                    <div class="process border-bottom ">
                        <div class="text my-5 mx-3">
                            <h1>?????????</h1>
                            
                        </div>
                        <div class="progress-rate d-flex mb-5 ">
                            <div class="order  ">

                                <div class="number text-light ml-3">
                                    <span  >1</span> 
                                </div>
                                <div class="shop-car   text-dark">???????????????</div>
                            </div>
                            <div class="g-container mt-3 mr-2">
                                <div class="g-progress01"></div>
                            </div>
                            <div class="order ">
                                <div class="number text-light ml-4"><span >2</span> 
                                </div>
                                <div class="pircemove  text-dark">?????????????????????</div>
                            </div>
                            
                            <div class="g-container mt-3 mr-2">
                                <div class="g-progress01"></div>
                            </div>
                            <div class="order ">
                                <div class="number text-light ml-2"><span>3</span>
                                </div>
                                <div class="datamaen  text-dark">????????????</div>
                            </div>
                            
                            <div class="g-container mt-3 mr-2">
                                <div class="g-progress"></div>
                            </div>
                            <div class="order ">
                                <div class="number01 ml-2"><span>4</span> 
                                </div>
                                <div class="finish  text-dark">????????????</div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- ???????????? -->
                    <div class="send-data col-md-12">
                        <h2>????????????</h2>
                        <form >
                            <div class="form-row ">
                              <div class="form-group col-md-12">
                                <label for="inputEmail4">??????</label>
                                <input type="email" class="form-control" id="inputEmail4"placeholder="?????????" >
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">??????</label>
                                <input type="password" class="form-control" id="inputPassword4"placeholder="0912345678">
                              </div>
                            </div>
                      
                            <div class="form-group">
                              <label for="inputAddress2">Email</label>
                              <input type="text" class="form-control" id="inputAddress2" placeholder="abc123@gmail.com">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputCity">City</label>
                                </div>
                              <div class="form-group col-md-6">
                                
                                <input type="text" class="form-control" id="inputCity"placeholder="??????">
                              </div>
                              <div class="form-group col-md-6">
                                
                                
                                <input type="text" class="form-control" id="inputCity"placeholder="????????????">
                                </select>
                              </div>
                              <div class="form-group col-md-12">
                               
                                <input type="text" class="form-control" id="inputAddress2" placeholder="??????">
                              </div>
                            </div>
                           
                            
                          </form>
                    </div>
                  
                        
                    <div class="calculate text-right border-bottom mx-3 my-3 d-flex flex-column align-items-end ">
                        <div class="total d-flex"><div class="quantity distance01">??????:</div><span>3</span></div>
                        <div class="total d-flex"><div class="subtotal distance">??????:</div><span>$90,000</span></div>
                        <div class="total d-flex"><div class="freight distance02">??????:</div><span>$1,200</span></div>
                        <div class="total d-flex"><div class="total-price distance03">??????:</div><span>$91,200</span></div>
                        
                        
                        
                        
                    </div>
                    <div class="next-or-back">
                        <div class="back d-flex pt-4 pb-5">
                            <div class="icon"><button type="button" onclick="location.href='/digital-cube -bootstrap/shop 03.html'" class="btn btn-outline-primary px-5 py-2">?????????</button></div>
                        <div class="next ml-auto">  <button type="button" onclick="location.href='/digital-cube -bootstrap/shop 04.html'" class="btn  btn-primary px-5 py-2" type="submit">????????????</button></div>
                    </div>

                </div>
            </div>
        </div>

    </main>
    <footer>
        <!-- ???????????? -->
        <section id="info ">
            <div class="container d-lg-flex  my-5 ">
                <div class="min-info-pic col-12 col-md-2 text-center  my-lg-5">
                    <svg class="arrow next-more" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                        <defs>
                          <style>
                            .cls-1 {
                              fill: #162446;
                            }
                
                            .cls-2 {
                              fill: #fff;
                            }
                          </style>
                        </defs>
                        <title>?????? 2</title>
                        <g id="??????_2" data-name="?????? 2">
                          <g id="??????_1-2" data-name="?????? 1">
                            <circle class="cls-1" cx="20" cy="20" r="20" />
                            <path class="cls-2"
                              d="M20,7l7.13,4.11a7.91,7.91,0,0,1,3.95,6.84v6.8l-8.61-5V18.32l7.37,4.26V18.63a7.89,7.89,0,0,0-3.95-6.85L21.28,9.1V33.25L9,26.14V13.35l5.89,3.4a7.91,7.91,0,0,1,3.95,6.85v4.76l-1.23-.71V24.31a7.92,7.92,0,0,0-4-6.85l-3.42-2v9.94L20,31.11Z" />
                          </g>
                        </g>
                      </svg>
                      <span class="ml-3 text-xl">????????????</span>
                      <p>Air plant banjo lyft occupy retro adaptogen indego</p>
                </div>
                <div class="details d-lg-flex col-12 col-md-10 mx-auto text-center my-5">
                    <div class="footer-tito col-12 col-lg-6 col-xl-3 my-3 ">
                        <span>CATEGORIES</span>
                        <li>First Link</li>
                        <li>Second Link</li>
                        <li>Third Link</li>
                        <li>Fourth Link</li>
                    </div>
                    <div class="footer-tito col-12 col-lg-6 col-xl-3 my-3 ">
                        <span>CATEGORIES</span>
                        <li>First Link</li>
                        <li>Second Link</li>
                        <li>Third Link</li>
                        <li>Fourth Link</li>
                    </div>
                    <div class="footer-tito col-12 col-lg-6 col-xl-3 my-3 ">
                        <span>CATEGORIES</span>
                        <li>First Link</li>
                        <li>Second Link</li>
                        <li>Third Link</li>
                        <li>Fourth Link</li>
                    </div>
                    <div class="footer-tito col-12 col-lg-6 col-xl-3 my-3 ">
                        <span>CATEGORIES</span>
                        <li>First Link</li>
                        <li>Second Link</li>
                        <li>Third Link</li>
                        <li>Fourth Link</li>
                    </div>
                </div>
                
            </div>
            <div class="under-bar ">
                <div class="container  d-sm-flex justify-content-between">
                    <div class="trademark ">?? 2020 Tailblocks ??? @knyttneve</div>
                    <div class="under-icon mx-auto mx-sm-0">
                        <span>
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="svg-size" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z">
                            </path>
                        </svg>
                        </span>
                        <span>
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="svg-size" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                        </span>
                        <span>
                            <i class="bi bi-instagram"></i>
                        </span>
                        <span>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="svg-size" viewBox="0 0 24 24">
                            <path stroke="none"
                              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                          </svg>
                        </span>
                    </div>
                </div>
                
            </div>
    
    
           
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>

</html>