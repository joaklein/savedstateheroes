window.addEventListener('load', (event) => {
    const section = document.querySelector('#podcast-list');
    const burger = document.querySelector('.burger');

    burger.addEventListener('click', showMobileMenu);

    if (window.location.href.match('/episodes') != null) {
        getCasts();
    }

    async function getCasts() {
        try {
            const response = await axios.get('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fanchor.fm%2Fs%2F130b8e30%2Fpodcast%2Frss');
            console.log(response.data);
            createList(response.data);
        } catch (error) {
            console.error(error);
        }
    }

    function createList(data) {
        let item = data.items;


        for (let i = 0; i < data.items.length; i++) {

            section.innerHTML += `
        <div>
        <p><a target="_blank" href="${item[i].link}">${item[i].title}</a></p>
        <audio controls src="${item[i].enclosure.link}" preload="none"></audio>
        </div>`;
        }
    }

    function showMobileMenu() {
        let pages = document.querySelector('.pages');
        let nav = document.querySelector('nav');

        nav.classList.toggle('nav-open');
        pages.classList.toggle('pages-show');
    }
});
