<?php global $post; ?>

<div class="single_job_listing" itemscope itemtype="http://schema.org/JobPosting">
  <meta itemprop="title" content="<?php echo esc_attr( $post->post_title ); ?>" />
	<?php if ( get_option( 'job_manager_hide_expired_content', 1 ) && 'expired' === $post->post_status ) : ?>
		<div class="job-manager-info"><?php _e( 'This listing has expired.', 'wp-job-manager' ); ?></div>
	<?php else : ?>
		<?php
			/**
			 * single_job_listing_start hook
			 *
			 * @hooked job_listing_meta_display - 20
			 * @hooked job_listing_company_display - 30
			 */
			do_action( 'single_job_listing_start' );
		?>
 <!-- <?php if ( candidates_can_apply() ) : ?>
				<?php get_job_manager_template( 'job-application.php' ); ?>
	  <?php endif; ?> -->
   <div class="application-command"style="margin-bottom:10px"><a href="#" class="ecp-trigger arrow application_button button" data-modal="modal" id="onload">Je postule</a>
   <a href="http://job.linagora.com/offres" style="margin-left:10px;"><u>  Retour</u></a><a href="javascript:window.print()" style="margin-left:10px;"><u>Imprimer</u></a>
  </div>
  
		<div class="job_description" itemprop="description">
		<div class="presentation-linagora">
      <p><u><br>	[showhide type="" more_text="À propos de Linagora" less_text="Cacher le contenu"]</u></p>

      <h3>Notre entreprise</h3>
<p>
LINAGORA est une entreprise crée en 2000. C’est une entreprise jeune, dynamique et en forte croissance. LINAGORA est le leader français du logiciel libre. Avec nos logiciels Open Source et services, nous proposons une alternative aux logiciels propriétaires pour réussir les grands projets du Libre.

Nous sommes un acteur majeur du logiciel libre en France (Paris et régions) et à l’international (plusieurs filiales et bureaux à l’ étranger). Nous opérons nos activités aussi bien pour des clients institutionnels tels que gouvernements et ministères que des entreprises privées pour leur permettre de développer leur indépendance technologique. Nos clients ont fait le choix grâce à nos collaborations de mettre le logiciel libre à la portée de tous leurs collaborateurs et usagers. Nous apportons une attention permanente à la recherche, l’innovation collaborative et au développement de nos produits notamment grâce à de nombreux partenariats que nous avons tissé durant toutes ces années mais surtout grâce aux talents de nos collaborateurs.</p>
<p>
Pourquoi nous rejoindre ?

Le siège de LINAGORA est situé à La Défense dans un cadre complètement rénové et agréable qui favorise la culture du bien-être au travail, de la convivialité mais aussi à trouver de bonnes idées.

Nos collaborateurs sont, comme nos logiciels, libres. De nombreuses activités et facilités sont à leur disposition. Tout est libre chez LINAGORA sauf une chose : il n’est pas permis de transgresser nos fondamentaux basés sur des valeurs humaines fortes, une culture éthique d’entreprise et des actions solidaires.

Notre leadership est fortement lié à notre politique RH riche de convictions d’égalité des chances et de diversité notamment par l’attention que nous portons à chaque candidature mais aussi à chaque collaborateur dans son recrutement, son plan de développement et son épanouissement pour lui permettre de relever avec nous les grands challenges de notre entreprise.[/showhide]</p><br>
 
      </div>
      <?php echo apply_filters( 'the_job_description', get_the_content() ); ?>
      <span class="postuler-meta"><p> Vous pouvez postuler directement sur notre site <a href="job.linagora.com">job.linagora.com</a> ou nous envoyer un e-mail à <a href="mailto:job@linagora.com">job@linagora.com.</a></p></span>

 
  </div>
 
   <div style="margin-bottom:10px" class="application-command">
 <a href="#" class="ecp-trigger arrow application_button button" data-modal="modal" id="onload">Je postule</a>
     <a href="http://job.linagora.com/offres" style="margin-left:20px;margin-top:10px;"><u>Retour</u>
 </a><a href="javascript:window.print()" style="margin-left:20px;"><u>Imprimer</u></a>
  </div>

		<?php
			/**
			 * single_job_listing_end hook
			 */
			do_action( 'single_job_listing_end' );
		?>
	<?php endif; ?>
  
  

