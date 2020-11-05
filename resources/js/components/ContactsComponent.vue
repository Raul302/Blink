<template>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3>Contactos</h3>
            </div>
            <div class="col-md-auto">
                <button class="btn btn-light border font-weight-bold">
                    Import
                </button>
            </div>
            <div class="col col-lg-2">
                  <router-link to="/contacts/newContact"><button class="btn btn-primary font-weight-bold">
                 Crear contacto
                </button>
                </router-link> 
                <el-button type="text" @click="dialogFormVisible = true">Modal</el-button>
            </div>
        </div>

        <div>
            <table-LRPM></table-LRPM>
        </div>

<el-dialog title="" width="80%"  :visible.sync="dialogFormVisible">
  <el-form :model="form">
      <contact-component></contact-component>
  </el-form>
  <span slot="footer" class="dialog-footer">
    <el-button @click="dialogFormVisible = false">Cancelar</el-button>
    <el-button type="primary" @click="dialogFormVisible = false">Guardar</el-button>
  </span>
</el-dialog>
    </div>
</template>

<script>
export default {
    data() {
        return {
 dialogTableVisible: false,
        dialogFormVisible: false,
        form:{},
        gridData:[{}],
};
    },
    methods :{
    }
};
</script>

<style></style>
