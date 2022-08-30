window.addEventListener('load', (event) => {
    const burger = document.querySelector('.burger');

    function showMobileMenu() {
        let pages = document.querySelector('.pages');
        let nav = document.querySelector('nav');

        nav.classList.toggle('nav-open');
        pages.classList.toggle('pages-show');
    }

    burger.addEventListener('click', showMobileMenu);

    if (window.location.href.match('/episodes') != null) {
        const section = document.querySelector('#podcast-list');

        async function getCasts() {
            try {
                const response = await axios.get('https://anchor.fm/s/130b8e30%2Fpodcast/rss');
                console.log(response.data);
                createList(response.data);
            } catch (error) {
                console.error(error);
            }
        }

        function createList(data) {
            let item = data.items;



        }
        getCasts();

    }

});
