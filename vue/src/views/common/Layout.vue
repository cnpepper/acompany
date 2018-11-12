<template>
    <div>
        <el-row>
            <el-col :span="24">
                <el-menu class="el-menu-demo" mode="horizontal"
                    background-color="#545c64" text-color="#fff" active-text-color="#ffd04b" :router="true"
                    default-active="/home">
                    <el-menu-item index="/home">仪表盘</el-menu-item>
                    <el-submenu index="/crm">
                        <template slot="title">CRM模块</template>
                        <el-submenu index="/lead">
                            <template slot="title">线索管理</template>
                            <el-menu-item index="/query">线索查询</el-menu-item>
                        </el-submenu>
                        <el-submenu index="/customer">
                            <template slot="title">客户管理</template>
                            <el-menu-item index="/crm/customer/query">客户查询</el-menu-item>
                        </el-submenu>
                        <el-submenu index="/chance">
                            <template slot="title">机会管理</template>
                            <el-menu-item index="/query">机会查询</el-menu-item>
                        </el-submenu>
                        <el-submenu index="/contract">
                            <template slot="title">合同管理</template>
                            <el-menu-item index="/query">合同查询</el-menu-item>
                        </el-submenu>
                    </el-submenu>
                    <el-submenu index="3">
                        <template slot="title">OA模块</template>
                        <el-submenu index="/job">
                            <template slot="title">工单管理</template>
                            <el-menu-item index="/check">工单审核</el-menu-item>
                            <el-menu-item index="/query">工单查询</el-menu-item>
                        </el-submenu>
                    </el-submenu>
                    <el-submenu index="4">
                        <template slot="title">财务模块</template>
                    </el-submenu>
                    <el-submenu index="5">
                        <template slot="title">统计模块</template>
                    </el-submenu>
                    <el-submenu index="6">
                        <template slot="title">用户设置</template>
                    </el-submenu>
                    <el-submenu index="7">
                        <template slot="title">系统设置</template>
                        <el-submenu index="7-1">
                        <template slot="title">基础设置</template>
                            <el-menu-item index="/setting/base/employee">员工设置</el-menu-item>
                        </el-submenu>
                    </el-submenu>
                </el-menu>
            </el-col>
        </el-row>
        <el-row>
            <el-col :span="24">
                <router-view></router-view>
            </el-col>
        </el-row>
    </div>
</template>

<script>
export default {};
</script>

<style>
</style>