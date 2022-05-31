import { Controller } from '@hotwired/stimulus';
import snarkdown from 'snarkdown';

/* stimulusFetch: 'lazy' */
export default class extends Controller {
    static targets = ['output'];

    convert(event) {
        const rawText = event.currentTarget.value;
        this.outputTarget.innerHTML = snarkdown(rawText);
    }
}
