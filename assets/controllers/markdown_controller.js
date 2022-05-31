import { Controller } from '@hotwired/stimulus';
import snarkdown from 'snarkdown';

export default class extends Controller {
    convert(event) {
        const rawText = event.currentTarget.value;
        console.log(snarkdown(rawText));
    }
}
