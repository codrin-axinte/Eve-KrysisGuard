<template>
    <div>
        <div class="row">
            <div class="form-inline">
                <div class="form-group">
                    <label>Select Ore</label>
                    <select class="form-control" v-model="currentOre">
                        <option  v-for="ore in ores" :value="ore">{{ ore.name }}</option>
                    </select>
                </div>
                <button class="nk-btn nk-btn-style-1 nk-btn-md nk-btn-color-main-1" @click="addOre(currentOre)">Add Ore</button>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <h3>Total: <span>{{ total }}</span> IKS</h3>
        <div class="nk-gap-2"></div>
        <div class="row" v-if="selectedOres.length > 0">
            <div class="col-md-4" v-for="ore in selectedOres" v-if="ore !== undefined">
                <ore-calculator :ore="ore" @priceChanged="updatePrice"></ore-calculator>
            </div>
        </div>
        <div v-if="selectedOres.length > 3">
            <div class="nk-gap-2"></div>
            <h3>Total: <span>{{ total }}</span> IKS</h3>
            <div class="nk-gap-2"></div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "ore-table",
        props: ['ores'],
        data(){
            return {
                total: 0,
                currentOre: undefined,
                selectedOres: []
            }
        },
        methods:{
            addOre(ore) {
                if(ore === undefined) return;
                this.selectedOres.push(ore);
            },
            updatePrice(evt){
                $.each(this.selectedOres, function(key, ore){
                    if(evt.ore.id === ore.id){
                        ore.price = evt.price;
                    }
                });
                this.updateTotal();
            },
            updateTotal(){
                let value = 0;
                $.each(this.selectedOres, function(key, ore){
                    value += ore.price === undefined ? 0 : ore.price;
                });
                this.total = value;
            }
        }
    }
</script>

<style scoped>

</style>