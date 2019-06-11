var app = new Vue({
    el: "#app",
    data: {
        scrollingnav: false,
        shownNav: false,
        mode: "M",
        modeM: true

    },
    created() {
        window.addEventListener('scroll', this.handleScroll);
        window.addEventListener('resize', this.handleResize);
        window.addEventListener('load', this.handleLaod);
        window.addEventListener('beforeunload', this.handbeforeunload);
    },
    methods: {

        handleScroll(event) {
            if (window.pageYOffset >= 150) {

                this.scrollingnav = true;

            } else {
                this.scrollingnav = false;
            }
        },
        handleLaod(event) {
            if (window.pageYOffset >= 150) {

                this.scrollingnav = true;

            } else {
                this.scrollingnav = false;
            }
        },

        handbeforeunload(event) {
            if (window.pageYOffset >= 150) {

                this.scrollingnav = true;

            } else {
                this.scrollingnav = false;
            }
        },

        handleResize(event) {

            if (window.pageYOffset >= 150) {

                this.scrollingnav = true;

            } else {
                this.scrollingnav = false;
            }
        },
        shownNavS() {
            this.scrollingnav = true;
            this.shownNav = true;
        },
        closenav() {
            this.scrollingnav = true;
            this.shownNav = false;
        },
        editMode(mode) {
            this.mode = mode
        }



    },
})
