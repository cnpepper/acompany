<template>
    <div>
        <div>
            <p>动画</p>
            <div class="action"></div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style lang="scss" scoped>
    .action{
        width:100px;
	    height:100px;
	    background:red;
	    position:relative;
	    animation:mymove 5s infinite;
	    -webkit-animation:mymove 5s infinite; /* Safari and Chrome */
    }
    @keyframes mymove{
        from{
            top:0px;
        }
        to{
            top:200px;
        }
    }
    @-webkit-keyframes mymove{
        from{
            top:0px;
        }
        to{
            top:200px;
        }
    }
</style>