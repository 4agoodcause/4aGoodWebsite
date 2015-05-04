<?php include $_SERVER['DOCUMENT_ROOT'].'/views/header-style.php'; ?>
	
  <section id="colors" class="colors section">
    <div class="wrapper">
    
      <h1 class="section-title">Colors</h1>
      
      <div class="grid list-colors">
      
        <div class="col-1-6">
          <div class="color-swatch blue">
            <div class="hex">#006699</div>
            <div class="lt lt-blue">
              <div class="hex">#3399cc</div>              
            </div>
          </div>
        </div>
        
        <div class="col-1-6">
          <div class="color-swatch green">
            <div class="hex">#339900</div>
            <div class="lt lt-green">
              <div class="hex">#99cc66</div>              
            </div>
          </div>
        </div>
        
        <div class="col-1-6">
          <div class="color-swatch red">
            <div class="hex">#cc3333</div>
          </div>
        </div>
        
        <div class="col-1-6">
          <div class="color-swatch purple">
            <div class="hex">#993399</div>
          </div>
        </div>

        <div class="col-1-6">
          <div class="color-swatch yellow">
            <div class="hex">#ffcc33</div>
          </div>
        </div>

        <div class="col-1-6">
          <div class="color-swatch black">
            <div class="hex">#24292b</div>
            <div class="lt grey">
              <div class="hex">#b7bbbc</div>              
            </div>
          </div>
        </div>
      
      </div>
    
    </div>
  </section>
  
  <section class="typography section">
    <div class="wrapper">
    
      <h1 class="section-title">Typography</h1>
      
      <h2 class="title-sub-section">Font Family</h2>
      
      <div class="item">
        <p>Proxima Nova</p>
      </div>
      
      <h2 class="title-sub-section">Headline Styles</h2>
      
      <div class="item">
        <p class="label">32px</p>
        <h1>Bacon is the best meat to eat</h1>
      </div>
      
      <div class="item">
        <p class="label">21px / Semi-Bold</p>
        <h2>Bacon is the best meat to eat</h2>
      </div>
      
      <div class="item">
        <p class="label">19px</p>
        <h3>Bacon is the best meat to eat</h3>
      </div>
      
      <div class="item">
        <p class="label">17px</p>
        <h4>Bacon is the best meat to eat</h4>
      </div>        
      
      <h2 class="title-sub-section">Paragraphs</h2>
      
      <div class="item">
        <p class="label">16px / 24px</p>
        <p>Donec tristique, felis hendrerit blandit consectetur, lectus risus semper nibh, ac faucibus ligula diam a turpis. Nunc ac dapibus nunc, sit amet posuere erat. Curabitur faucibus ipsum a dolor tempor, laoreet dictum ipsum aliquam. Donec dignissim velit diam, eget tincidunt odio feugiat ac. Suspendisse eu risus sit amet nibh eleifend hendrerit id ac risus. In scelerisque condimentum vestibulum. Curabitur pellentesque nulla nec sapien dapibus laoreet. Vestibulum vitae augue consectetur, auctor massa at, vulputate magna. Nam et mollis enim. Donec dapibus rutrum enim ut varius. Morbi elementum est id semper vestibulum.</p>
      </div>
      
      <h2 class="title-sub-section">Lists</h2>
      
      <div class="item body">
        <p class="label">Unordered List</p>
        <ul>
          <li>List Item One</li>
          <li>List Item One</li>
          <li>List Item One</li>
          <li>List Item One</li>
        </ul>
      </div>
      
      <div class="item body">
        <p class="label">Ordered List</p>
        <ol>
          <li>List Item One</li>
          <li>List Item One</li>
          <li>List Item One</li>
          <li>List Item One</li>
        </ol>
      </div>
    
    </div>
  </section>
  
  <section class="forms section">
    <div class="wrapper">
    
    <h1 class="section-title">Forms</h1>
    
    <div class="sub-section">
      <h2 class="title-sub-section">Search</h2>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/views/search.php'; ?>
    </div>

    <div class="sub-section">
      <h2 class="title-sub-section">Get Report</h2>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/views/report-form.php'; ?>
    </div>

    </div>
  </section>
  
  <section class="buttons section">
    <div class="wrapper">
  
      <h1 class="section-title">Buttons</h1>
  
      <div class="item">
        <p class="label">Default Button</p>
        <a href="" class="btn">Say Hello!</a>
        <a href="" class="btn green">Say Hello!</a>
        <a href="" class="btn lt-green">Say Hello!</a>
      </div>

      <div class="item">
        <p class="label">Large Button</p>
        <a href="" class="btn btn-large">Say Hello!</a>
      </div>
  
    </div>
  </section>
  
  <section id="tables" class="tables section">
    <div class="wrapper">
    
      <h1 class="section-title">Tables</h1>

    <div class="sub-section">
      <h2 class="title-sub-section">Report</h2>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/views/report-table.php'; ?>
    </div>

    <div class="sub-section">
      <h2 class="title-sub-section">Data</h2>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/views/data-table.php'; ?>
    </div>
    
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/views/footer.php'; ?>