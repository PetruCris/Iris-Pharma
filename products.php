<?php include 'header.php'; ?>
<section>
  <h2>Our Product Range</h2>
  <p>Explore our carefully selected natural remedies, each designed to support your health the natural way. Use the filter below to browse by product category.</p>

  <label for="category-filter">Filter by Category:</label>
  <select id="category-filter" onchange="filterProducts()">
    <option value="all">All</option>
    <option value="tea">Teas</option>
    <option value="oil">Oils</option>
    <option value="supplement">Supplements</option>
    <option value="extract">Extracts</option>
  </select>

  <div id="product-list">
    <div class="product tea">
      <img src="images/chamomile.jpg" alt="Chamomile Tea">
      <div class="product-info">
        <div class="product-header">
          <h3>Chamomile Tea</h3>
          <span class="price">€6.50</span>
        </div>
        <p>Promotes relaxation and better sleep while calming digestion and reducing anxiety.</p>
      </div>
    </div>

    <div class="product extract">
      <img src="images/echinacea.jpg" alt="Echinacea Drops">
      <div class="product-info">
        <div class="product-header">
          <h3>Echinacea Drops</h3>
          <span class="price">€8.00</span>
        </div>
        <p>Supports immune system health and helps reduce cold and flu symptoms.</p>
      </div>
    </div>

    <div class="product oil">
      <img src="images/lavender.jpg" alt="Lavender Balm">
      <div class="product-info">
        <div class="product-header">
          <h3>Lavender Balm</h3>
          <span class="price">€5.00</span>
        </div>
        <p>Soothes skin irritation and promotes calm with natural anti-inflammatory properties.</p>
      </div>
    </div>

    <div class="product oil">
      <img src="images/stjohn.jpg" alt="St. John’s Wort Oil">
      <div class="product-info">
        <div class="product-header">
          <h3>St. John’s Wort Oil</h3>
          <span class="price">€9.50</span>
        </div>
        <p>Traditionally used to ease mild depression and promote skin healing.</p>
      </div>
    </div>

    <div class="product supplement">
      <img src="images/milkthistle.jpg" alt="Milk Thistle Capsules">
      <div class="product-info">
        <div class="product-header">
          <h3>Milk Thistle Capsules</h3>
          <span class="price">€12.00</span>
        </div>
        <p>Supports liver detoxification and improves digestive function.</p>
      </div>
    </div>

    <div class="product extract">
      <img src="images/valerian.jpg" alt="Valerian Root Tincture">
      <div class="product-info">
        <div class="product-header">
          <h3>Valerian Root Tincture</h3>
          <span class="price">€7.50</span>
        </div>
        <p>Natural remedy to reduce anxiety and help with insomnia.</p>
      </div>
    </div>

    <div class="product extract">
      <img src="images/propolis.jpg" alt="Propolis Spray">
      <div class="product-info">
        <div class="product-header">
          <h3>Propolis Spray</h3>
          <span class="price">€6.00</span>
        </div>
        <p>Protects the throat and boosts immunity with natural bee-derived ingredients.</p>
      </div>
    </div>

    <div class="product oil">
      <img src="images/aloe.jpg" alt="Aloe Vera Gel">
      <div class="product-info">
        <div class="product-header">
          <h3>Aloe Vera Gel</h3>
          <span class="price">€5.80</span>
        </div>
        <p>Cools and heals sunburns, rashes, and other skin irritations.</p>
      </div>
    </div>

    <div class="product oil">
      <img src="images/calendula.jpg" alt="Calendula Cream">
      <div class="product-info">
        <div class="product-header">
          <h3>Calendula Cream</h3>
          <span class="price">€4.50</span>
        </div>
        <p>Soothes cuts, bruises, and dry skin with anti-inflammatory calendula extract.</p>
      </div>
    </div>

    <div class="product supplement">
      <img src="images/moringa.jpg" alt="Moringa Powder">
      <div class="product-info">
        <div class="product-header">
          <h3>Moringa Powder</h3>
          <span class="price">€10.00</span>
        </div>
        <p>Rich in antioxidants and nutrients that support energy and immune function.</p>
      </div>
    </div>

    <div class="product supplement">
      <img src="images/turmeric.jpg" alt="Turmeric Capsules">
      <div class="product-info">
        <div class="product-header">
          <h3>Turmeric Capsules</h3>
          <span class="price">€11.20</span>
        </div>
        <p>Provides anti-inflammatory support for joints, muscles, and immune health.</p>
      </div>
    </div>

    <div class="product tea">
      <img src="images/ginger.jpg" alt="Ginger Tea">
      <div class="product-info">
        <div class="product-header">
          <h3>Ginger Tea</h3>
          <span class="price">€6.30</span>
        </div>
        <p>Helps with nausea, improves digestion, and reduces inflammation.</p>
      </div>
    </div>

    <div class="product oil">
      <img src="images/eveningprimrose.jpg" alt="Evening Primrose Oil">
      <div class="product-info">
        <div class="product-header">
          <h3>Evening Primrose Oil</h3>
          <span class="price">€13.00</span>
        </div>
        <p>Supports hormonal balance and skin health, especially in women.</p>
      </div>
    </div>

    <div class="product extract">
      <img src="images/seabuckthorn.jpg" alt="Sea Buckthorn Syrup">
      <div class="product-info">
        <div class="product-header">
          <h3>Sea Buckthorn Syrup</h3>
          <span class="price">€9.90</span>
        </div>
        <p>Boosts immunity and is rich in vitamins C and E for skin and heart health.</p>
      </div>
    </div>

    <div class="product supplement">
      <img src="images/rosehip.jpg" alt="Rosehip Powder">
      <div class="product-info">
        <div class="product-header">
          <h3>Rosehip Powder</h3>
          <span class="price">€8.70</span>
        </div>
        <p>Rich in Vitamin C, supports joint function and immune system.</p>
      </div>
    </div>

    <div class="product tea">
      <img src="images/linden.jpg" alt="Linden Flower Tea">
      <div class="product-info">
        <div class="product-header">
          <h3>Linden Flower Tea</h3>
          <span class="price">€5.60</span>
        </div>
        <p>Helps with cold symptoms, fever, and calming the nervous system.</p>
      </div>
    </div>

    <div class="product supplement">
      <img src="images/fenugreek.jpg" alt="Fenugreek Capsules">
      <div class="product-info">
        <div class="product-header">
          <h3>Fenugreek Capsules</h3>
          <span class="price">€9.00</span>
        </div>
        <p>Known to help balance blood sugar levels and support digestion.</p>
      </div>
    </div>

    <div class="product extract">
      <img src="images/hawthorn.jpg" alt="Hawthorn Extract">
      <div class="product-info">
        <div class="product-header">
          <h3>Hawthorn Extract</h3>
          <span class="price">€7.80</span>
        </div>
        <p>Supports heart health, circulation, and blood pressure regulation.</p>
      </div>
    </div>

    <div class="product supplement">
      <img src="images/licorice.jpg" alt="Licorice Root Lozenges">
      <div class="product-info">
        <div class="product-header">
          <h3>Licorice Root Lozenges</h3>
          <span class="price">€4.20</span>
        </div>
        <p>Relieves sore throat and helps soothe respiratory discomfort.</p>
      </div>
    </div>

    <div class="product extract">
      <img src="images/ginkgo.jpg" alt="Ginkgo Biloba Drops">
      <div class="product-info">
        <div class="product-header">
          <h3>Ginkgo Biloba Drops</h3>
          <span class="price">€10.40</span>
        </div>
        <p>Improves memory, concentration, and circulation to the brain.</p>
      </div>
    </div>

  </div>
</section>

<script>
  function filterProducts() {
    const category = document.getElementById('category-filter').value;
    const products = document.querySelectorAll('.product');
    products.forEach(p => {
      if (category === 'all') {
        p.style.display = 'flex';
      } else {
        p.style.display = p.classList.contains(category) ? 'flex' : 'none';
      }
    });
  }
</script>

<?php include 'footer.php'; ?>



