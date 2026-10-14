<section class="w-full py-14 lg:py-20 bg-surface-container-low" id="menu-populer">
    <div class="max-w-[1280px] w-full mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header 
            label="Menu Terpopuler"
            title="Pilihan Varian Favorit"
            subtitle="Dari rasa klasik autentik hingga racikan bumbu khas nusantara." />

        @php
            $menus = [
                ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBYjzKTFtvlLwwZ2221AsUvjvIpOriM68PMLzOvj-umPKlXtFpg5Q7RAtgdfmEATZfapilQkF-OfDeu4PG4G8k7_Ub1ZzW2TfZpGU85SJCvDnkC_iicNuD7G1N3CblKLb5EuLtXHjXrCUGFoYfIafwTmW4cEsHt_pTi1qVisd0g0ajelvxbxURM-ynHdmlUfG5qstMbNpXehCLxn-O2qMM5nnCvdDCBRviwDZrqcwxd223A-T5MIBvb', 'badge'=>'Best Seller','name'=>'Takoyaki Octopus Original','desc'=>'Gurita kenyal utuh, katsuobushi melimpah, saus tare Osaka.','price'=>'18.000','rating'=>'4.9'],
                ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuATwZoP7VHq-O_hs8gWOdEsipMh29RkWmGI2QVUl_xHTL1c2aTbW2FXZQprhXXZTvwxHJp7bJkWnzEzf4a46qmtEWsTlirEDcF2esC53IhcGWPJlyTsdjszAdkMSnb4yjpGp54wZVZC54cttJXp8NGEAMdjuKrp7OllJ-nTb-f8Gp3LhbjBlNnFbgl0JuLbjfMgACbJes1IlRH260nzMR16Y7CtxCsYvRGrhmba50K5JenNqFsDj7ec','badge'=>'Pedas Segar','name'=>'Takoyaki Sambal Matah','desc'=>'Bawang merah Bali, serai wangi, cabai rawit pedas meledak.','price'=>'22.000','rating'=>'4.8'],
                ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuCEYAa3OqNJrwurJmobphC8CSEEFIwjgXV_mv-EiHypD9GFHv7cnzK1K3oGErXWOlfSR8TMFmfuGdCBJJK9afCbAAS18js_OluRUA1Kvqi9aFqnym96EKlddUR36ZsPkKdNTUxwkfCFTs1n8355QLc4Lh9gIckDyehqmloefIv4sHL-Sk3MzkbIub3V4qd4WtgU5DncxCsQNU3HITveHXuwG3BJTW5ErG_0jYZmoOWY_ep5rsQ89ApX','badge'=>'Favorit Anak','name'=>'Takoyaki Mozarella Melt','desc'=>'Keju mozzarella lumer dengan saus cheddar creamy gurih.','price'=>'24.000','rating'=>'4.9'],
                ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuCoo3kfAqinnJEHFLJNRzB3_6OV9QbmbnaYfYB1vqSwNrMyJCyCyP5MqSFVL0i9iatjPhxAwTXddqOkAs7yaKLj5Ono1sSxnMxy85HXKj-NLte5tQEVRAmvMi7MVSLnqO-WS2_19Qu3AQcWg9sPX84L_FaRcHA3-V-Tb-co5QvMldjyzIrSP_IL0Y7lBCDllDlgkaxiE5MAX-jpG_Z2tNWcBHaIG7lCoaNUhAXfDSjf-NP0WKR9FnJK','badge'=>'Chef Special','name'=>'Takoyaki Mentai Torched','desc'=>'Saus mentai telur ikan tobiko dibakar api torch, wangi smokey.','price'=>'25.000','rating'=>'4.9'],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($menus as $m)
                <x-menu-card 
                    :img="$m['img']" :badge="$m['badge']" :name="$m['name']"
                    :desc="$m['desc']" :price="$m['price']" :rating="$m['rating']" />
            @endforeach
        </div>
    </div>
</section>