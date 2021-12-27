<?php

namespace Firebed\AadeMyData\Models\Enums;

class FeeType
{
    /**
     *  Για μηνιαίο λογαριασμό μέχρι και 50 ευρώ 12% [12,00%]
     */
    public const TYPE_1 = "1";


    /**
     *  Για μηνιαίο λογαριασμό από 50,01 μέχρι και 100 ευρώ 15% [15,00%]
     */
    public const TYPE_2 = "2";


    /**
     *  Για μηνιαίο λογαριασμό από 100,01 μέχρι και 150 ευρώ 18% [18,00%]
     */
    public const TYPE_3 = "3";


    /**
     *  Για μηνιαίο λογαριασμό από 150,01 ευρώ και άνω 20% [20,00%]
     */
    public const TYPE_4 = "4";


    /**
     *  Τέλος καρτοκινητής επί της αξίας του χρόνου ομιλίας (12%) [12,00%]
     */
    public const TYPE_5 = "5";


    /**
     *  Τέλος στη συνδρομητική τηλεόραση 10% [10,00%]
     */
    public const TYPE_6 = "6";


    /**
     *  Τέλος συνδρομητών σταθερής τηλεφωνίας 5% [5,00%]
     */
    public const TYPE_7 = "7";


    /**
     *  Περιβαλλοντικό Τέλος & πλαστικής σακούλας ν. 2339/2001 αρ. 6α 0,07 ευρώ ανά τεμάχιο [ποσό]
     */
    public const TYPE_8 = "8";


    /**
     *  Εισφορά δακοκτονίας 2% [2,00%]
     */
    public const TYPE_9 = "9";


    /**
     *  Λοιπά τέλη [ποσό]
     */
    public const TYPE_10 = "10";


    /**
     *  Τέλη Λοιπών Φόρων [ποσό]
     */
    public const TYPE_11 = "11";
}