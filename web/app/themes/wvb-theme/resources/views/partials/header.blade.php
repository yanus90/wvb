<div class="topheader">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="list-inline mb-0">
          <li class="list-inline-item"><i class="fa fa-envelope"></i><a href="mailto:#">info@warnsveldseboys.nl</a></li>
          <li class="list-inline-item"><i class="fa fa-phone"></i>0575 123 456</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-4">
        <a href="/" title="{{ get_bloginfo('name', 'display') }}">
          <img src="{{ get_template_directory_uri() }}/assets/images/logo/logo-warnsveldse-boys.svg" alt="Logo {{ get_bloginfo('name', 'display') }}" class="logo">
        </a>
      </div>
      <div class="col-xs-6 col-sm-4">
        <div class="row no-gutter">
          <div class="hidden-xs col-sm-6"></div>
          <div class="col-sm-6">
            <div class="hoofdsponsor">
              <p class="small"><em>Hoofdsponsor</em></p>
              <a href="/sponsoren/hoofdsponsor/" title="Glans Schoonmaakbedrijf Asbestsanering">
                <img src="{{ get_template_directory_uri() }}/assets/images/sponsoren/logo-glans.jpg" alt="Glans Schoonmaakbedrijf Asbestsanering" width="170" class="img-responsive">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="hidden-xs col-sm-4 col-md-3 col-lg-3">
        <form action="/zoeken">
          <div id="custom-search-input">
            <div class="input-group col-sm-12">
              <input type="text" name="s" value="<?=isset($_GET['s'])?$_GET['s']:''?>" class="form-control input-sm" placeholder="Zoekwoord...">
              <span class="input-group-btn">
                  <button class="btn btn-info btn-lg" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                  </button>
              </span>
            </div>
          </div>
        </form>
      </div>
      <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
        <ul class="list-inline socialmedia mt-45">
            <li><a href="#" target="_blank" title="{{ get_bloginfo('name', 'display') }} op Facebook"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#" target="_blank" title="{{ get_bloginfo('name', 'display') }} op Twitter"><i class="fa fa-twitter-square"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>