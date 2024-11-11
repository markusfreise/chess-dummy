const { default: axios } = require("axios");
import { createApp } from 'vue';

window.addEventListener('load',function() {
    
    var ff = createApp({
        delimiters: ['${', '}'],
        data() {
            return {
                waitForApi: false,
                temp_position: {
                    x: null,
                    y: null
                },
                pieces: {
                    queen_white: {
                        name: 'queen',
                        color: 'white',
                        position: {
                            x: 'd',
                            y: '4'
                        }
                    }
                },
            }
        },
        methods: {
            position: function( piece ) {
                return "pos_"+piece.position.x + "_" + piece.position.y;
            },
            move: function( piece_off ) {
                axios.post('/move', {
                    piece: "queen_white",
                    x: this.temp_position.x,
                    y: this.temp_position.y
                }).then( (response) => {
                    this.pieces = response.data;
                }).catch( (error) => {
                    alert(error);
                }).finally( () => {
                    this.waitForApi = false;
                });
            }
        },
        computed: {
            isTouch: function() {
                return supportsTouch;
            }
        },
        mounted: function() {
            console.log("mounted");
        }
    }).mount('#app');

})