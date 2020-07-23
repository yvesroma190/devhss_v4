<footer>
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="widget">
                    <h5 class="widgetheading">Pages</h5>
                    <ul class="link-list">
                        <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'index']); ?>">Accueil</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'prestation']); ?>">Nos prestations</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'index']); ?>">Nos offres</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Articles', 'action' => 'index']); ?>">Notre blog</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'contact']); ?>">Nos contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="span3">
                <div class="widget">
                    <h5 class="widgetheading">Clauses</h5>
                    <ul class="link-list">
                        <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'reference']); ?>">Références</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'termecondition']); ?>">Termes et conditions</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'contrat']); ?>">Contrats de sousription</a></li>
                    </ul>
                </div>
            </div>
            <div class="span3">
                <div class="widget">
                    <h5 class="widgetheading">Nous joindre</h5>
                    <address>
                        <strong>High Star Security</strong><br>
                        Marcory Résidentiel, 26 Bp 772 Abidjan 26<br>
                        Abidjan-Côte d'Ivoire
                    </address>
                    <p>
                        <i class="icon-phone"></i> Tél: 21 26 73 60 / fax: 21 00 50 30/29 <br>
                        <i class="icon-envelope-alt"></i> infos.hss2012@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="copyright">
                        <p>
                            <span>&copy; High Star Security - Tout droit réservé.</span>
                        </p>
                        <div class="credits">
                            Développé par <a href="#">KENLO Business And Technologies</a>
                        </div>
                    </div>
                </div>
                <!--<div class="span6">
            <ul class="social-network">
            <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
            <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
            <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
            <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
            <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
            </ul>
        </div>-->
            </div>
        </div>
    </div>
</footer>