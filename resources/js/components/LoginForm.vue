<template>
    <div class="q-gutter-y-md column" style="max-width: 300px">
        <q-input rounded outlined v-model="text" dense label="Email Address" />
        <q-input v-model="password" rounded outlined dense :type="isPwd ? 'password' : 'text'" label="Password">
            <template v-slot:append>
                <q-icon
                    :name="isPwd ? 'visibility_off' : 'visibility'"
                    class="cursor-pointer"
                    @click="isPwd = !isPwd"
                />
            </template>
        </q-input>
        <div class="row justify-between">
            <q-btn flat type="a" href="" no-caps push color="primary" label="Forgot Password?" />
            <q-btn label="Login" no-caps push type="submit" color="primary"/>
        </div>
    </div>
</template>