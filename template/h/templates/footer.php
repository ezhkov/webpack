<site-footer :page-data="pageData"></site-footer>

<transition name="modal" v-on:after-leave="afterLeave" v-on:before-enter="beforeEnter">
    <modal v-if="pageData.isModalVisible" :comp="modalComponent" :page-data="pageData">
        <div slot="modal-body"></div>
    </modal>
</transition>

<sweet-modal ref="message">This is an alert.</sweet-modal>

</div> <!-- .global-page-content -->

</div> <!-- .global-page -->
</div> <!-- #app -->
</body>

<script src="<?= parcelJson("manifest", "js") ?>" defer></script>
<script src="<?= parcelJson("vendor-async", "js") ?>" defer></script>
<script src="<?= parcelJson("vendor", "js") ?>" defer></script>
<script src="<?= parcelJson("app", "js") ?>" defer></script>
</html>
