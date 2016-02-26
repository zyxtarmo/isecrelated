# iRelated

https://en.m.wikipedia.org/wiki/2015_San_Bernardino_attack

On December 2, 2015, 14 people were killed and 22 were seriously injured in a terrorist attack at the Inland Regional Center in San Bernardino, California, which consisted of a mass shooting and an attempted bombing. The perpetrators, Syed Rizwan Farook and Tashfeen Malik, a married couple living in the city of Redlands, targeted a San Bernardino County Department of Public Health training event and holiday party, of about 80 employees, in a rented banquet room. Farook was an American-born U.S. citizen of Pakistani descent, who worked as a health department employee. Malik was a Pakistani-born lawful permanent resident of the United States.

https://assets.documentcloud.org/documents/2714001/SB-Shooter-Order-Compelling-Apple-Asst-iPhone.pdf

[Apple] will bypass or disable the auto-erase function whether or not it has been enabled;
[Apple] will enable the FBI to submit passcodes to the SUBJECT DEVICE for testing electronically via the physical device port, Bluetooth, Wi-Fi, or other protocol available on the SUBJECT DEVICE; and
[Apple] will ensure that when the FBI submits passcodes to the SUBJECT DEVICE, software running on the device will not purposefully introduce any additional delay between passcode attempts beyond what is incurred by Apple hardware.

[Provide] the FBI with a signed iPhone Software file, recovery bundle, or other Software Image File (“SIF”) that can be loaded onto the SUBJECT DEVICE. The SIF will load and run from Random Access Memory (“RAM”) and will not modify the iOS on the actual phone, the user data partition or system partition on the device’s flash memory. The SIF will be coded by Apple with a unique identifier of the phone so that the SIF would only load and execute on the SUBJECT DEVICE. The SIF will be loaded via Device Firmware Upgrade (“DFU”) mode, recovery mode, or other applicable mode available to the FBI. Once active on the SUBJECT DEVICE, the SIF will accomplish the three functions specified in paragraph 2. The SIF will be loaded on the SUBJECT DEVICE at either a government facility, or alternatively, at an Apple facility; if the latter, Apple shall provide the government with remote access to the SUBJECT DEVICE through a computer allowed the government to conduct passcode recovery analysis.

https://raw.githubusercontent.com/zyxtarmo/isecrelated/master/screen-shot-2016-02-16-at-11-14-30-pm.png

Teemu Väisänen: If brute-forcing of encryption is possible in a feasible time, there is either serious problems in the used encryption algorithm itself (which is not the case in the iOS), or the used encryption key is too short. The latter would be the case here, because people are commonly using just 4 or 6 numbers as passcodes. Brute-forcing them would be possible (and fast) without Apple's additional security features such as delays and key-destruction.

Currently, from technical point of view there are no obstacles for creating such a software, even tough Apple claims in that they cannot unlock device for anyone [Apple]. If such software is ever created, it has to be designed, created, tested, used, shared, and managed properly, otherwise (and most likely still [Bonneau]) it shall decrease the level of security and be misused. It is worth to note that there exist other ways to get the data from various devices that do not require breaking the encryption.

https://www.apple.com/business/docs/iOS_Security_Guide.pdf [iPhone 5c = A6 (no Secure Enclave as hardware) https://en.wikipedia.org/wiki/IPhone_5C]

Tarmo Randel: It seems that a decision was made in evidence handling / forensics process to reset suspects Apple ID password [Chmielewski] meaning that the device could not sync latest information after that to iCloud for easier retrieval by the FBI. While the decision made under the circumstances can be understood there is room for further discussion if and how the procedures could be improved. By doing technical analysis of the publicly available court order one can come to conclusion that Apple can probably indeed provide the FBI what the agency is asking for - custom firmware tailored specifically to disable one feature - and it may be easier in this case since the iPhone model obtained from the suspect was a model with less advanced security implementation (lacks a Secure Enclave in hardware) and this is allegedly not isolated case.

Apple has gone through a lot of effort to create device where encryption with operational measures are used to provide as secure environment to the user as possible while maintaining usability (4-digit pin code). There are some security certifications and programs where Apple has or wants it's iOS to be listed (FIPS 140-2, ISO 15408, CSfC) and while having technical capability of providing law enforcement agencies means to evade some security measures in order to provide easier access to the device, this, as usually, raises some legal and policy concerns in current globalized world. [http://dspace.mit.edu/bitstream/handle/1721.1/97690/MIT-CSAIL-TR-2015-026.pdf?sequence=1]

https://www.apple.com/customer-letter/

Apple: In today's digital world, the "key" to an encrypted system is a piece of information that unlocks the data, and it is only as secure as the protections around it. Once the information is known, or a way to bypass the code is revealed, the encryption can be defeated by anyone with that knowledge.


Tomáš Minárik: In short, the FBI is asking Apple to help enable it to brute-force the
encryption which is designed to be unbreakable by Apple itself. According to
the Guardian, as the U.S. law is based on precedent, the result of
this case can influence the way encryption is treated in the U.S., which may
have a massive effect on technology companies trying to provide high-level
cyber security to their customers

Lorena Trinberg: The 2013 Report of the Special Rapporteur on the promotion and
protection of the right to freedom of opinion and expression pointed out
that security and anonymity of communication are already undermined by
certain national law and that intrusive acts threaten the democratic
foundation. The Special Rapporteur therefore strongly recommends States to
not interfere with the use of encryption and underlines that States should
not compel the provision of encryption keys. Even though the FBI is not
asking Apple to directly decrypt the phone, it is obvious that their request
to rewrite the software to make it possible to guess potential passwords
automatically, leads to the same outcome.

However, the reckless limitation of the scope of the above mentioned human
rights needs to be avoided. Therefore, the assessment of whether human
rights can be limited requires balancing out the interests and taking in
particular into consideration the rule of necessity and proportionality. In
this case, the judge took the decision that the interest of the FBI to gain
information on how the San Bernardino shooters operated is considered to be
of higher value than the interest to keep communication information limited
of access to just a certain group of (potentially criminal) individuals. 

As long as this decision has only impact on this specific case, the granted
court order is legally well acceptable. But there are certain facts that
make not only a lawyer shiver. 

The U.S. legal system is based on case law. Fact is that this case would
cause a precedent. Consequently, it would open the door for many similar
cases to be dealt with in the same way as an unknown number of smartphones
could not be decrypted by law enforcement authorities yet. In addition, the
required software to be developed would work on any phone of the same type.
Knowing this, more laws, in particular data protection laws might be
breached afterwards once mighty governments feel tempted to use this
software to access user data for more than law enforcement purposes. After
all, it remains to be seen what legal developments on global level will
follow upon this case."



