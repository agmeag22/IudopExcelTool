
<?php $__env->startSection('content'); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link href="/css/vuetify.min.css" rel="stylesheet">
<style>
    [v-cloak] {
        display: none;
    }

    #app{
        width: 100%;
        height:100%;
        background-color: transparent;
    }

</style>
<div class="" id="app" v-cloak>
    <v-app> 
        <v-card elevation="2" outlined max-width="650" class="mx-auto">
            hola
        </v-card>
    </v-app>
</div>
<script src="/js/vue.js"></script>
<script src="/js/vuetify.js"></script>
<script src="/js/axios.min.js"></script>
<script src="/js/moment-with-locales.min.js"></script>
<script src="/js/vuetify-es-lang.js"></script>

<!--vue-clipboard2@0.3.1-->
<script type="module">
    axios.defaults.headers.common = {
        "X-Requested-With": "XMLHttpRequest",
    };
    new Vue({
        "el": '#app',
        "vuetify": new Vuetify({
            "lang": {
                "locales": {es},
                "current": 'es',
            }
        }),
        data() {
            return {


            }
        },
        beforeMount() {

        },

        mounted() {
        },


        computed: {

        },
        watch: {
        },

        methods: {
        }
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projects\c-serco\resources\views/empresa/index.blade.php ENDPATH**/ ?>