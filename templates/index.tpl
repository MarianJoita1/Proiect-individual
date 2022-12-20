{include file="header.tpl"}

{include file="navbar.tpl"}

<div class="containter-fluid" style="background-image: url(images/background.png);" >
    <div class="row text-center">
        <h1>AUTO SHARE</h1>
    </div>
    <div class="row justify-content-evenly" style="background: linear-gradient(90deg, rgba(172, 188, 188, 0.126) 0%, rgba(255,255,255,1) 100%); border-radius: 20px; margin-top: 100px;" >
        <div class="col-xxl-4 text-center h-50" >
            <img class="car-image" src="{$APP_WEB_ROOT}/images/rover.png" width="100%" >
        </div>
        <div class="col-xxl-4 h-50">
            <p class="fs-1 fw-bolder text-center p-3" style=" margin: 10%; border-radius: 20px;">
            Bine ati venit pe pagina magazinului nostru! Aici puteti gasi masina dorita! 
            </p>
        </div>
    
    </div>
    <div class="row justify-content-evenly p-3" style="margin-top: 100px;">
        <div class="col-xxl-4 text-center h-50">
        <p class="fs-1 fw-bolder text-center p-3" style=" margin: 10%; border-radius: 20px;">
            Puteti creea un anunt pentru propria masina!
        </p>
        <button type="button" class="btn btn-info" href="register.php">Creati un Anunt</button>
        </div>
        <div class="col-xxl-4 h-50">
            <img  src="{$APP_WEB_ROOT}/images/carSale.png" width="100%" >
        </div>
    </div>
</div>

{include file="footer.tpl"}