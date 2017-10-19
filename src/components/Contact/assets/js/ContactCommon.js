export default {
    props: {
        horizontal: {
            type: Boolean,
            default: false
        },

        vertical: {
            type: Boolean,
            default: true
        }
    },

    computed: {
        contactStyles() {
            return {
                list: {
                    'contact__list--horizontal': this.horizontal,
                    'contact__list--vertical': this.vertical
                }
            };
        }
    },

    mounted() {
        if (this.horizontal) {
            this.vertical = false;
        }
    }
};