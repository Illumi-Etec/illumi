<section class="equipe-illumi">

    <div class="title-equipe">
        <h2>Conheça a equipe Illumi</h2>
    </div>

    <div class="cards-equipe">
        <?php
        $team = array(
            array(
                "name" => "Marley Santos",
                "photo" => "assets/images/team/Marley-Santos.jpeg",
                "role" => "Desenvolvedor Front-end",
                "LinkedIn" => "https://www.linkedin.com/in/marleysantos/",
                "Instagram" => "https://instagram.com/marleysantos4390/",
                "Github" => "https://github.com/MarleyS439/"
            ),

            array(
                "name" => "Milena Oliveira",
                "photo" => "assets/images/team/Milena-Oliveira.jpeg",
                "role" => "Analista",
                "LinkedIn" => "#",
                "Instagram" => "#",
                "Github" => "#"
            ),

            array(
                "name" => "Mariana Moreira",
                "photo" => "assets/images/team/Mariana-Moreira.jpeg",
                "role" => "DBA",
                "LinkedIn" => "#",
                "Instagram" => "#",
                "Github" => "#"
            ),

            array(
                "name" => "Renan Teixeira",
                "photo" => "assets/images/team/Renan-Teixeira.png",
                "role" => "Gerente de Projetos",
                "LinkedIn" => "#",
                "Instagram" => "https://instagram.com/renan.teixx/",
                "Github" => "https://github.com/RenanCT2004/"
            ),

            array(
                "name" => "Felipe Felix",
                "photo" => "assets/images/team/Felipe-Felix.jpeg",
                "role" => "Designer",
                "LinkedIn" => "#",
                "Instagram" => "https://www.instagram.com/felix_fl_/",
                "Github" => "https://github.com/FelipeFLX/"
            ),

            array(

                "name" => "Matheus Gomes",
                "photo" => "assets/images/team/Matheus-Gomes.jpeg",
                "role" => "Dev Front-end",
                "LinkedIn" => "#",
                "Instagram" => "#",
                "Github" => "#"
            ),

            array(
                "name" => "Matheus Henrique",
                "photo" => "assets/images/team/Henrique.png",
                "role" => "Dev Back-end",
                "LinkedIn" => "https://www.linkedin.com/in/matheus-henrique-teixeira-santos-b148a2242?trk=contact-info/",
                "Instagram" => "https://instagram.com/matheus35300/",
                "Github" => "https://github.com/Tyran15/"
            ),

            array(
                "name" => "Matheus Campos",
                "photo" => "assets/images/team/Matheus-Campos.png",
                "role" => "Dev Back-end",
                "LinkedIn" => "#",
                "Instagram" => "https://instagram.com/matheuscamposdemenezes/",
                "Github" => "https://github.com/M4theusCM"
            ),

            array(
                "name" => "Matheus Merlim",
                "photo" => "assets/images/team/Matheus-Merlim.png",
                "role" => "Desenvolvedor Back-end",
                "LinkedIn" => "#",
                "Instagram" => "#",
                "Github" => "#"
            ),

            array(
                "name" => "Kauã Barbosa",
                "photo" => "assets/images/team/Kauã-Barbosa.jpeg",
                "role" => "Dev Back-end",
                "LikedIn" => "#",
                "Instagram" => "https://www.instagram.com/kkaua.barbosa/",
                "Github" => "https://github.com/Kazuto15/"
            ),

            array(
                "name" => "Vitor Mota",
                "photo" => "assets/images/team/Vitor-Mota.jpeg",
                "role" => "Designer",
                "LinkedIn" => "#",
                "Instagram" => "#",
                "Github" => "#"
            ),

            array(
                "name" => "Heitor Oliveira",
                "photo" => "assets/images/team/Heitor-Oliveira.jpeg",
                "role" => "DBA",
                "LinkedIn" => "#",
                "Instagram" => "#",
                "Github" => "#"
            )
        );

        foreach ($team as $member) {
            echo '<div class="card-equipe">
            <div class="profile-pic">
                <img src="' . $member["photo"] . '" alt="">
            </div>
            <div class="name-member">
                <p>' . $member["name"] . '</p>
                <span>' . $member["role"] . '</span>
                <div class="links-social">
                    <a href="' . $member["LinkedIn"] . ' " title="LinkedIn | ' . $member["name"] . ' " target="_blank">
                        <img src="assets/images/icons/linkedin.png" alt="">
                    </a>
    
                    <a href="' . $member["Instagram"] . ' " title="Instagram | ' . $member["name"] . ' " target="_blank">
                        <img src="assets/images/icons/instagram.png" alt="">
                    </a>
    
                    <a href="' . $member["Github"] . ' " title="Github | ' . $member["name"] . ' " target="_blank">
                        <img src="assets/images/icons/github.png" alt="">
                    </a>
                </div>
            </div>
        </div>';
        }
        ?>
    </div>
</section>