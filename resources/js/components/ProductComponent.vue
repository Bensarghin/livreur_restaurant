<template>
    <div class="card-body" id="panel">
        <!-- @if($card->items->count() > 0) -->
        <p>{{$card->count()}}</p>
        <!-- @endif -->
    </div>
</template>

<script>
    export default {
        methods:{
            
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
