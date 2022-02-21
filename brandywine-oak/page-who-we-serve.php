<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wyeth
 */

  get_header();
  while ( have_posts() ) : the_post();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php include(locate_template('template-parts/shared/banner.php', false, false )); ?>

  <div class="entry-content">
    <div class="contentBlock contentBlock--main" style="">
      <div class="row column">
        <h2>Our Solution</h2>
        <div class="contentBlock_intro">
          <p>
            Specializing in solutions for corporate executives, both active and
            retired, Brandywine Oak builds multi-generational relationships by
            helping wealthy families simplify their financial decision-making
            through comprehensive strategies that focus on intentional goals.
          </p>
        </div>
        <div class="grid-x grid-margin-x grid-margin-y contentBlock_content">
          <div class="cell small-12 medium-7 large-8 contentBlock_contentMain">
            <p>
              We will show you a &#8220;simple approach to a complex business&#8221; through
              the education necessary to alleviate any anxiety over financial
              decision-making, while enabling you to better experience the rewards
              of your wealth.
            </p>
            <p>
              Helping you to maximize your family&#8217;s enjoyment and financial
              well-being now and in the future is a critical part of our service.
            </p>
          </div>
          <div
            class="cell small-12 medium-5 large-4 contentBlock_contentSidebar"
          ></div>
        </div>
      </div>
    </div>

    <section id="typical-client">
      <style>
        @media (min-width: 685px) {
          .qualities {
              display: flex;
              gap: 2.1rem;
          }
        }
        .qualities p:before {
            content: "";
            display: block;
            margin: 0 auto 1.25rem;
            width: 3.0517578125rem;
            height: 3.0517578125rem;
            background-image: url(https://brandywineoak.15eastcreative.com/wp-content/uploads/2022/02/circle-check-brandywine-oak.png);
            background-size: 100% auto;
            background-position: center;
            background-repeat: no-repeat;
        }
        .dark {
          background-color: hsl(218deg 35% 24%);
          color: white;
        }
        .dark h2 {
          color: white;
        }
        #typical-client section {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding: 4rem 1rem 2.6rem;
        }
        #typical-client p {
          max-width: 80ch;
        }
        #typical-client h2 {
            font-size: 2.6rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        #typical-client a {
            color: white;
            text-decoration: underline;
        }   
        #typical-client button {
            background-color: white;
            padding: 1.1rem;
            margin-top: 0.7rem;
            transition: 0.3s;
            margin-bottom: 1.8rem;
        }
        #typical-client button:hover {
            transform: scale(1.05);
        }
        #typical-client button:active {
            background-color: hsl(0deg 6% 83%);
        }
      </style>
      <section>
        <h2>Who is a typical Brandywine Oak Private Wealth&nbsp;client?</h2>
        <p>Our typical client is someone age 50 plus with $1 million or more of investable financial&nbsp;assets.</p>
        <div class="qualities">
          <p>Prefer to delegate to an expert so you can go out and enjoy&nbsp;retirement</p>
          <p>Want to know your spouse will be in not just good, but great&nbsp;hands</p>
          <p>Value having a “certainty of outcome” over “beating the&nbsp;market”</p>
        </div>
      </section>
      <div class="dark">
        <section>
          <h2>Getting Started</h2>
          <p>
            Our services start by completing a set of online
            <a href="/pre-meeting">Pre-Meeting Questions</a>. Once we receive those we
            reach out to schedule a complimentary introductory meeting. All of our
            services start with a complimentary&nbsp;consult.
          </p>
          <a href="/pre-meeting">
            <button>Start Free Consultation</button>
          </a>
        </section>
      </div>
    </section>

    <section id="carousel">
      <style>
      .carousel {
        display: grid;
      }
      .carousel p {
          font-size: 27px;
          max-width: 900px;
          margin-left: auto;
          margin-right: auto;
          grid-column: 1;
          grid-row: 1;
          text-align: center;
          padding: 9rem 1rem 0;
          font-family: "Gotham A","Gotham B","Arial",Sans-Serif;
          animation-duration: 15s;
          animation-iteration-count: infinite;
      }
      .carousel p:nth-of-type(1) {
        animation-name: fadeinandout1;
      }
      .carousel p:nth-of-type(2) {
        animation-name: fadeinandout2;
      }
      .carousel p:nth-of-type(3) {
        animation-name: fadeinandout3;
      }
      @keyframes fadeinandout1 {
        0% { opacity: 0; }
        10% { opacity: 1; }
        23% { opacity: 1; }
        33% { opacity: 0; }
        100% { opacity: 0; }
      }
      @keyframes fadeinandout2 {
        0% { opacity: 0; }
        33% { opacity: 0; }
        43% { opacity: 1; }
        56% { opacity: 1; }
        66% { opacity: 0; }
        100% { opacity: 0; }
      }
      @keyframes fadeinandout3 {
        0% { opacity: 0; }
        66% { opacity: 0; }
        76% { opacity: 1; }
        90% { opacity: 1; }
        100% { opacity: 0; }
      }
      </style>
      <div class="carousel">
        <p>
          Successful investing is singles and doubles, not home runs. Wealthy
          families hire our firm to manage their wealth responsibly and not
          swing for the fences.
        </p>
        <p>
          We feel the more a family plans, the more the family will keep. In our
          experience it is far better to prepare than it is to repair.
        </p>
        <p>
          The biggest void for families in investment advice is being
          intentional around their finances. The conversation in our view has to
          be around cash flow and lifestyle rather than short-term performance
          and market commentary.
        </p>
      </div>
    </section>
    <!-- End of Carousel -->

    </div>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->

<?php
  endwhile; // End of the loop.
  get_footer();
