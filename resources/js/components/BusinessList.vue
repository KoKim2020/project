<template>
    <div class="q-pa-md">
        <q-list @click="alert = true">
            <q-item>
                <q-item-section>
                    <q-item-label class="text-no-wrap">OAKHOUSE ELECTRONICS STORE</q-item-label>
                    <q-item-label class="tw-text-red-700">One Sale Now</q-item-label>
                    <q-item-label caption>
                        You Can Buy The following Products in OAKHOUSE-TECH
                    </q-item-label>
                </q-item-section>
            </q-item>
    
            <q-item clickable v-ripple>
                <q-item-section avatar>
                    <q-avatar rounded>
                        <img src="https://img.icons8.com/color/50/000000/wifi-logo.png"/>                
                    </q-avatar>
                </q-item-section>
                <q-item-section>Wireless Sensors</q-item-section>
            </q-item>

            <q-separator />

            <q-item clickable v-ripple>
                <q-item-section avatar>
                    <q-avatar rounded>
                        <img src="https://img.icons8.com/dusk/64/000000/resistor.png"/>                    
                    </q-avatar>
                </q-item-section>
                <q-item-section>Resistors, Capacitors, And Electronics Components</q-item-section>
            </q-item>

            <q-item clickable v-ripple>
                <q-item-section avatar>
                    <q-avatar rounded>
                        <img src="https://img.icons8.com/ultraviolet/40/000000/stepper-motor.png"/>                    
                    </q-avatar>
                </q-item-section>
                <q-item-section>Stepper Motors & DC Motors</q-item-section>
            </q-item>

            <q-item clickable v-ripple>
                <q-item-section avatar>
                    <q-avatar rounded>
                        <img src="https://img.icons8.com/metro/26/000000/integrated-circuit.png"/>
                    </q-avatar>
                </q-item-section>
                <q-item-section>Motor Drivers</q-item-section>
            </q-item>

            <q-separator />

            <q-item clickable v-ripple>
                <q-item-section avatar>
                    <q-avatar rounded>
                        <img src="https://img.icons8.com/dotty/80/000000/arduino-uno-board.png"/>                
                    </q-avatar>
                </q-item-section>
                <q-item-section>Arduino Boards</q-item-section>
            </q-item>
            <q-item clickable v-ripple>
                <q-item-section avatar>
                    <q-avatar rounded>
                        <img src="https://img.icons8.com/color/48/000000/raspberry-pi-zero.png"/>
                    </q-avatar>
                </q-item-section>
                <q-item-section>Respberry Pi Boards</q-item-section>
            </q-item>

            <q-separator />

            <q-item clickable v-ripple>
                <q-item-section avatar>
                    <q-avatar rounded>
                        <img src="https://img.icons8.com/dusk/64/000000/medium-battery.png"/>                    
                    </q-avatar>
                </q-item-section>
                <q-item-section>Batteries</q-item-section>
            </q-item>
            <q-separator />

            <q-item clickable v-ripple>
                <q-item-section avatar>
                    <q-avatar rounded>
                        <img src="https://img.icons8.com/bubbles/50/000000/airplane-take-off.png"/>
                    </q-avatar>
                </q-item-section>
                <q-item-section>RC Airplanes</q-item-section>
            </q-item>
            <q-item clickable v-ripple>
                <q-item-section avatar>
                    <q-avatar rounded>
                        <img src="https://img.icons8.com/color/48/000000/f1-race-car-top-veiw.png"/>                    
                    </q-avatar>
                </q-item-section>
                <q-item-section>RC Cars</q-item-section>
            </q-item>
        </q-list>
        <q-dialog v-model="alert">
            <q-card>
                <q-card-section>
                    <div class="text-h6">Alert</div>
                </q-card-section>

                <q-card-section class="q-pt-none">
                    This Feature Will Be Coming Soon.
                </q-card-section>

                <q-card-actions align="right">
                    <q-btn flat label="OK" color="primary" v-close-popup />
                </q-card-actions>
            </q-card>
        </q-dialog>
    </div>
</template>

<script>
export default {
    data() {
        return {
            alert: false
        }
    }
}
</script>