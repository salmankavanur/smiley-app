<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->truncate();

        $services = [
            [
                'title' => 'Steam Ironing',
                'slug' => 'steam-ironing-service-manjeri',
                'description' => 'Crisp and wrinkle-free finishing for your daily wear.',
                'content' => '<p>Look sharp every day with Smiley Dry Cleaning\'s <strong>premium steam ironing service in Manjeri</strong>. We use industrial-grade steam press machines to ensure your clothes are crisp, wrinkle-free, and perfectly finished. Unlike regular ironing, steam ironing protects the fabric integrity while removing stubborn creases.</p><h3>Why Choose Our Steam Ironing?</h3><ul><li>Antibacterial steam treatment</li><li>Prevents fabric burns and shine marks</li><li>Perfect for office wear, shirts, and trousers</li><li>Fast turnaround time</li></ul>',
                'icon' => 'iron',
                'meta_title' => 'Best Steam Ironing Service in Manjeri | Wrinkle-Free Guarantee',
                'meta_description' => 'Get crisp, professional steam ironing in Manjeri. Protect your clothes from burns and shine. Fast pickup and delivery available. Call Smiley Dry Cleaning now.',
                'meta_keywords' => 'steam ironing manjeri, ironing service manjeri, clothes pressing manjeri, laundry service, dry cleaners near me',
                'features' => json_encode(['Antibacterial Steam', 'No Shine Marks', 'Perfect Creases', 'Same Day Service']),
                'faqs' => json_encode([
                    ['question' => 'How long does steam ironing take?', 'answer' => 'For standard orders, we offer 24-48 hour turnaround. Express service is available for same-day delivery.'],
                    ['question' => 'Will steam ironing burn my clothes?', 'answer' => 'No. Our industrial steam presses use controlled temperature and steam, which is much safer for fabrics than direct contact hot plates used in home irons.'],
                    ['question' => 'Do you provide pickup for ironing only?', 'answer' => 'Yes! We offer free pickup and delivery for all service orders above a minimum value.']
                ])
            ],
            [
                'title' => 'Shoe Cleaning',
                'slug' => 'shoe-laundry-cleaning-manjeri',
                'description' => 'Premium care for your sneakers, leather shoes, and more.',
                'content' => '<p>Give your kicks a second life with the <strong>best shoe laundry in Manjeri</strong>. From white sneakers turning yellow to muddy trekking boots, we handle it all. Our shoe cleaning experts use specialized chemicals and soft brushes to deep clean without damaging the material.</p><h3>We Clean:</h3><ul><li>Sneakers & Sports Shoes</li><li>Formal Leather Shoes</li><li>Suede & Nubuck Footwear</li><li>Boots & Loafers</li></ul><p>We also offer sole whitening and odor elimination treatments.</p>',
                'icon' => 'shoe',
                'meta_title' => 'Premium Shoe Laundry & Cleaning in Manjeri | Sneaker Spa',
                'meta_description' => 'Professional shoe cleaning service in Manjeri. We clean sneakers, leather shoes, boots, and suede. Restore your footwear to brand new condition today.',
                'meta_keywords' => 'shoe cleaning manjeri, sneaker laundry manjeri, shoe washing service, shoe spa manjeri, best shoe cleaners',
                'features' => json_encode(['Deep Stain Removal', 'Odor Elimination', 'Sole Whitening', 'Suede Protection']),
                'faqs' => json_encode([
                    ['question' => 'Can you clean white sneakers that have turned yellow?', 'answer' => 'Yes, we use specialized de-yellowing agents and UV treatment to restore the brightness of white soles and fabrics.'],
                    ['question' => 'Do you clean leather shoes?', 'answer' => 'Absolutely. We use premium leather cleaners and conditioners to clean and nourish the leather, preventing cracks.'],
                    ['question' => 'How long does shoe cleaning take?', 'answer' => 'Shoe cleaning typically takes 3-4 days to ensure proper drying and detailing.']
                ])
            ],
            [
                'title' => 'Blanket Washing',
                'slug' => 'blanket-quilt-cleaning-manjeri',
                'description' => 'Deep cleaning for heavy blankets and comforters.',
                'content' => '<p>Sleeping on a clean bed is essential for health. Our <strong>heavy blanket and quilt cleaning service in Manjeri</strong> removes dust mites, allergens, and accumulated sweat. We use large-capacity commercial washers that standard home machines cannot match.</p><p>Perfect for comforters, duvets, mink blankets, and heavy quilts. Hygienically washed and perfectly dried.</p>',
                'icon' => 'blanket',
                'meta_title' => 'Hygienic Blanket & Quilt Cleaning in Manjeri | Smiley Dry Cleaning',
                'meta_description' => 'Deep cleaning for blankets, quilts, and comforters in Manjeri. Remove allergens and dust mites with our specialized heavy laundry service.',
                'meta_keywords' => 'blanket cleaning manjeri, quilt washing, comforter dry cleaning, heavy laundry service manjeri',
                'features' => json_encode(['Dust Mite Removal', 'Allergen Free', 'Softness Restored', 'Hygienic Packaging']),
                'faqs' => json_encode([
                    ['question' => 'How often should I clean my blanket?', 'answer' => 'We recommend cleaning heavy blankets at least once every 3-6 months to prevent allergen buildup.'],
                    ['question' => 'Can you remove old stains from quilts?', 'answer' => 'We have a high success rate with stain removal, but it depends on the age and type of the stain. We always try our best!']
                ])
            ],
            [
                'title' => 'Bag & Toys Cleaning',
                'slug' => 'bag-soft-toy-cleaning-manjeri',
                'description' => 'Safe and effective cleaning for bags and stuffed toys.',
                'content' => '<p>Don\'t let dirt ruin your favorite travel bags or your child\'s teddy bear. We offer specialized <strong>cleaning for school bags, luggage, and soft toys in Manjeri</strong>. We use skin-safe, non-toxic detergents to ensure that toys are safe for children to play with after cleaning.</p>',
                'icon' => 'bag',
                'meta_title' => 'Bag & Soft Toy Cleaning Service in Manjeri',
                'meta_description' => 'Expert cleaning for travel bags, school bags, and soft toys in Manjeri. Safe, non-toxic, and hygienic cleaning process.',
                'meta_keywords' => 'bag cleaning manjeri, trolley bag repair cleaning, soft toy washing, teddy bear cleaning manjeri',
                'features' => json_encode(['Child-Safe Detergents', 'Mold Removal', 'Zipper Lubrication', 'Tough Stain Removal']),
                'faqs' => json_encode([
                    ['question' => 'Is the detergent safe for kids?', 'answer' => 'Yes, for soft toys, we use certified hypoallergenic and non-toxic detergents.'],
                    ['question' => 'Can you clean trolley bags?', 'answer' => 'Yes, we clean hard and soft shell trolley bags, including the wheels and handles.']
                ])
            ],
            [
                'title' => 'Curtain Cleaning',
                'slug' => 'curtain-dry-cleaning-manjeri',
                'description' => 'Dust and stain removal to refresh your home interiors.',
                'content' => '<p>Revitalize your home with our <strong>curtain dry cleaning service in Manjeri</strong>. Curtains act as air filters, trapping dust and odors. Our process removes these contaminants while preserving the color and texture of the fabric. We handle removal and re-installation upon request.</p>',
                'icon' => 'curtain',
                'meta_title' => 'Curtain Dry Cleaning Service in Manjeri | Home Interior Cleaning',
                'meta_description' => 'Professional curtain dry cleaning in Manjeri. Remove dust, stains, and odors from your drapes. Pickup and delivery available.',
                'meta_keywords' => 'curtain cleaning manjeri, drapery cleaning, window blind cleaning, dry cleaners for curtains',
                'features' => json_encode(['Dust Removal', 'Pleat Preservation', 'No Shrinkage', 'Odor Neutralization']),
                'faqs' => json_encode([
                    ['question' => 'Do you remove and reinstall curtains?', 'answer' => 'Yes, we offer a re-installation service for a small additional fee.'],
                    ['question' => 'Will my curtains shrink?', 'answer' => 'No, we use dry cleaning methods specifically designed to prevent shrinkage in curtain fabrics.']
                ])
            ],
            [
                'title' => 'Carpet Cleaning',
                'slug' => 'carpet-rug-cleaning-manjeri',
                'description' => 'Deep extraction cleaning for carpets and rugs.',
                'content' => '<p>Restore the vibrant colors of your floor with our <strong>carpet and rug cleaning service in Manjeri</strong>. We use deep extraction technology to pull out dirt, sand, and stains buried deep within the fibers. Ideal for Persian rugs, synthetic carpets, and office flooring.</p>',
                'icon' => 'carpet',
                'meta_title' => 'Professional Carpet Cleaning Manjeri | Deep Stain Removal',
                'meta_description' => 'Best carpet cleaning in Manjeri. We remove stubborn stains, dirt, and allergens from rugs and carpets. Book your slot today.',
                'meta_keywords' => 'carpet cleaning manjeri, rug washing, carpet shampooing, floor cleaning service',
                'features' => json_encode(['Deep Extraction', 'Pet Odor Removal', 'Quick Drying', 'Fiber Protection']),
                'faqs' => json_encode([
                    ['question' => 'How long does it take for carpets to dry?', 'answer' => 'Our extraction method leaves carpets slightly damp, usually drying completely within 4-6 hours depending on ventilation.'],
                    ['question' => 'Do you clean carpets onsite?', 'answer' => 'For large wall-to-wall carpets, we clean onsite. For rugs, we recommend taking them to our facility for a deeper wash.']
                ])
            ],
            [
                'title' => 'Suits & Blazers',
                'slug' => 'suit-blazer-dry-cleaning-manjeri',
                'description' => 'Professional dry cleaning to maintain fabric quality and fit.',
                'content' => '<p>Your power suit deserves professional care. Our <strong>suit and blazer dry cleaning in Manjeri</strong> focuses on maintaining the structure, lining, and fabric sheen. We treat collars and cuffs specially to remove sweat marks without damaging the delicate wool or blend fabrics.</p>',
                'icon' => 'suit',
                'meta_title' => 'Premium Suit & Blazer Dry Cleaning Manjeri',
                'meta_description' => 'Expert care for suits, blazers, and coats. Maintain the perfect fit and fabric quality with Smiley Dry Cleaning Manjeri.',
                'meta_keywords' => 'suit dry cleaning manjeri, blazer cleaning, coat dry clean, formal wear cleaning',
                'features' => json_encode(['Hand Finishing', 'Structure Preservation', 'Lint Removal', 'Premium Packaging']),
                'faqs' => json_encode([
                    ['question' => 'How often should I dry clean my suit?', 'answer' => 'It depends on usage, but typically after 3-4 wears to prevent sweat and dirt buildup.'],
                    ['question' => 'Can you remove shine marks from ironing?', 'answer' => 'We can improve the appearance, but severe shine marks from improper home ironing are damage to the fabric fiber and may be permanent. We prevent this by using proper pressing equipment.']
                ])
            ],
            [
                'title' => 'Costumes & Sarees',
                'slug' => 'saree-wedding-dress-dry-cleaning-manjeri',
                'description' => 'Delicate care for expensive and intricate fabrics.',
                'content' => '<p>We specialize in <strong>bridal saree and wedding dress dry cleaning in Manjeri</strong>. Whether it\'s heavy Kanchipuram silk, designer lehengas, or stone-work gowns, our gentle cleaning process preserves the embroidery and fabric luster. Trusted by hundreds of brides for post-wedding preservation.</p>',
                'icon' => 'saree',
                'meta_title' => 'Bridal Saree & Wedding Dress Dry Cleaning Manjeri',
                'meta_description' => 'Trust your expensive wedding sarees and designer dresses with us. Specialized silk saree dry cleaning in Manjeri.',
                'meta_keywords' => 'saree polishing manjeri, silk saree dry cleaning, wedding dress cleaning, designer wear laundry',
                'features' => json_encode(['Zari Polishing', 'Stone Work Care', 'Silk Conditioning', 'Roll Pressing']),
                'faqs' => json_encode([
                    ['question' => 'Is roll pressing included?', 'answer' => 'Yes, for sarees, roll pressing is part of the service to ensure a crisp, wrinkle-free finish.'],
                    ['question' => 'Is it safe for heavy stone work?', 'answer' => 'Yes, we cover delicate embellishments before cleaning to identify them and treat them manually if needed.']
                ])
            ],
            [
                'title' => 'Stain Removing',
                'slug' => 'stain-removal-service-manjeri',
                'description' => 'Expert stain removal techniques for stubborn marks.',
                'content' => '<p>Got a tough stain? Don\'t risk setting it further. Bring it to the <strong>stain removal experts in Manjeri</strong>. We treat ink, oil, grease, coffee, and wine stains using targeted chemical agents that are tough on stains but gentle on clothes.</p>',
                'icon' => 'stain',
                'meta_title' => 'Expert Stain Removal Service Manjeri | Ink, Oil, Wine Stains',
                'meta_description' => 'Professional stain removal service. We remove tough stains like ink, oil, and coffee from all types of fabrics. 99% Success rate.',
                'meta_keywords' => 'stain removal manjeri, laundry stain remover, clothes spot cleaning',
                'features' => json_encode(['Ink & Oil Specialists', 'Color Safe', 'Fabric Analysis', 'Success Guarantee']),
                'faqs' => json_encode([
                    ['question' => 'Can you remove all stains?', 'answer' => 'We can remove most organic and chemical stains. However, old stains that have been ironed over or treated with incorrect home remedies may be set permanently.'],
                    ['question' => 'Does stain removal cost extra?', 'answer' => 'Basic stain removal is included, but extensive treatment for heavy stains may have a surcharge.']
                ])
            ],
        ];

        DB::table('services')->insert($services);
    }
}
