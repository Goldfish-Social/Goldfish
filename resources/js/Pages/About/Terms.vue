<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
  <AppLayout title="Terms of Use">
      <div class="pt-4 dark:bg-gray-800 bg-gray-100 text-gray-900 dark:text-white">
        <div class="min-h-screen flex flex-col items-center pt-6 pb-6">
          <div
            class="
              w-full
              sm:max-w-2xl
              mt-6
              p-6
              dark:bg-gray-900 bg-gray-200 text-gray-900 dark:text-white
              shadow-md
              overflow-hidden
              sm:rounded-lg
              prose
            "
          >
            <h5>1. Terms</h5>
            <p>
              By accessing the website at
              <a href="https://goldfish.social">https://goldfish.social</a>, you
              are agreeing to be bound by these terms of service, all applicable
              laws and regulations, and agree that you are responsible for
              compliance with any applicable local laws. If you do not agree
              with any of these terms, you are prohibited from using or
              accessing this site. The materials contained in this website are
              protected by applicable copyright and trademark law.
            </p>
            
            <h5>3. Disclaimer</h5>
            <ol type="a">
              <li>
                The materials on Goldfish's website are provided on an 'as is'
                basis. Goldfish makes no warranties, expressed or implied, and
                hereby disclaims and negates all other warranties including,
                without limitation, implied warranties or conditions of
                merchantability, fitness for a particular purpose, or
                non-infringement of intellectual property or other violation of
                rights.
              </li>
              <li>
                Further, Goldfish does not warrant or make any representations
                concerning the accuracy, likely results, or reliability of the
                use of the materials on its website or otherwise relating to
                such materials or on any sites linked to this site.
              </li>
            </ol>
            <h5>4. Limitations</h5>
            <p>
              In no event shall Goldfish or its suppliers be liable for any
              damages (including, without limitation, damages for loss of data
              or profit, or due to business interruption) arising out of the use
              or inability to use the materials on Goldfish's website, even if
              Goldfish or a Goldfish authorized representative has been notified
              orally or in writing of the possibility of such damage. Because
              some jurisdictions do not allow limitations on implied warranties,
              or limitations of liability for consequential or incidental
              damages, these limitations may not apply to you.
            </p>
            <h5>5. Accuracy of materials</h5>
            <p>
              The materials appearing on Goldfish's website could include
              technical, typographical, or photographic errors. Goldfish does
              not warrant that any of the materials on its website are accurate,
              complete or current. Goldfish may make changes to the materials
              contained on its website at any time without notice. However
              Goldfish does not make any commitment to update the materials.
            </p>
            <h5>6. Links</h5>
            <p>
              Goldfish has not reviewed all of the sites linked to its website
              and is not responsible for the contents of any such linked site.
              The inclusion of any link does not imply endorsement by Goldfish
              of the site. Use of any such linked website is at the user's own
              risk.
            </p>
            <h5>7. Modifications</h5>
            <p>
              Goldfish may revise these terms of service for its website at any
              time without notice. By using this website you are agreeing to be
              bound by the then current version of these terms of service.
            </p>
            <h5>8. Governing Law</h5>
            <p>
              These terms and conditions are governed by and construed in
              accordance with the laws of Canada and you irrevocably submit to
              the exclusive jurisdiction of the courts in that State or
              location.
            </p>
          </div>
        </div>
      </div>
  </AppLayout>
</template>
