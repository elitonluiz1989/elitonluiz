export default function sessionScroll (session) {
    if (session.indexOf('/') === -1 && session !== '') {
        let element = document.querySelector('#' + session);

        if (element) {
            let scrollTo = $(element).offset().top;
            scrollTo -= $('#header').height();

            let newUrl = window.location.origin + '/' + session;
            window.history.pushState(null, null, newUrl);

            $('html, body').animate({scrollTop: scrollTo}, 500);
        }
    }
}